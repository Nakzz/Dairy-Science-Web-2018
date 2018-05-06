<?php

class SpreadsheetMaker
{
    /**
     * @var PHPExcel
     */
    private $phpExcel;

    /**
     * @var VisitorDao
     */
    private $visitorDao;

    private $startDate;
    private $endDate;
    private $detailed;

    private $worksheetIndex = 0;

    public function __construct($startDate, $endDate, $detailed)
    {
        $this->phpExcel = new PHPExcel();
        $this->visitorDao = new VisitorDao();
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->detailed = $detailed;
        $this->createWorksheets();
    }

    private function createWorksheets()
    {
        if ($this->detailed) {
            $this->createDetailedWorksheet();
        }
        $this->createVisitCountWorksheet();
        $this->createToolCountWorksheet();
        $this->createNewUsersWorksheet();
    }

    /**
     * Every visit in the period startDate to endDate.
     */
    private function createDetailedWorksheet()
    {
        $allVisits = $this->visitorDao->getAllVisits($this->startDate, $this->endDate);
        $worksheet = $this->createNewWorksheet(array('Email', 'Tool', 'Time'));
        foreach ($allVisits as $rowIndex => $visit) {
            $r = $rowIndex + 2;
            $worksheet->setCellValueByColumnAndRow(0, $r, $visit->email);
            $worksheet->setCellValueByColumnAndRow(1, $r, $visit->tool);
            $worksheet->setCellValueByColumnAndRow(2, $r, $visit->time);
        }
        $worksheet->setTitle('All visits');
    }

    /**
     * Total number of times each visitor used a tool.
     */
    private function createVisitCountWorksheet()
    {
        $visitCounts = $this->visitorDao->getVisitCounts($this->startDate, $this->endDate);
        $worksheet = $this->createNewWorksheet(array('Email', 'Tool', 'Visit Count'));
        foreach ($visitCounts as $rowIndex => $count) {
            $r = $rowIndex + 2;
            $worksheet->setCellValueByColumnAndRow(0, $r, $count->email);
            $worksheet->setCellValueByColumnAndRow(1, $r, $count->tool);
            $worksheet->setCellValueByColumnAndRow(2, $r, $count->visitCount);
        }
        $worksheet->setTitle('Visit counts');
    }

    /**
     * Total number of times each tool was used.
     */
    private function createToolCountWorksheet()
    {
        $toolCounts = $this->visitorDao->getToolCounts($this->startDate, $this->endDate);
        $worksheet = $this->createNewWorksheet(array('Tool', 'Visit Count'));
        foreach ($toolCounts as $rowIndex => $count) {
            $r = $rowIndex + 2;
            $worksheet->setCellValueByColumnAndRow(0, $r, $count->tool);
            $worksheet->setCellValueByColumnAndRow(1, $r, $count->toolCount);
        }
        $worksheet->setTitle('Visit counts per tool');
    }

    /**
     * List of users who have used a tool for the first time.
     */
    private function createNewUsersWorksheet()
    {
        $firstTimeToolUsers = $this->visitorDao->getNewUsers($this->startDate, $this->endDate);
        $worksheet = $this->createNewWorksheet(array('Email', 'Tool'));
        foreach ($firstTimeToolUsers as $rowIndex => $user) {
            $r = $rowIndex + 2;
            $worksheet->setCellValueByColumnAndRow(0, $r, $user->email);
            $worksheet->setCellValueByColumnAndRow(1, $r, $user->tool);
        }
        $worksheet->setTitle('New users');
    }

    public function getSpreadsheet()
    {
        $this->phpExcel->removeSheetByIndex($this->phpExcel->getSheetCount() - 1);
        $filename = $this->getFilename();
        $objWriter = PHPExcel_IOFactory::createWriter($this->phpExcel, 'Excel2007');
        $objWriter->save($filename);
        return str_replace($_SERVER['DOCUMENT_ROOT'], '', $filename);
    }

    private function createNewWorksheet($headers)
    {
        $worksheet = $this->phpExcel->createSheet($this->worksheetIndex++);
        foreach ($headers as $colIndex => $header) {
            $worksheet->setCellValueByColumnAndRow($colIndex, 1, $header);
        }
        return $worksheet;
    }

    /**
     * @return string
     */
    private function getFilename()
    {
        $stDateObj = new DateTime($this->startDate);
        $enDateObj = new DateTime($this->endDate);
        $format = 'M-j-Y';
        $stDateStr = $stDateObj->format($format);
        $enDateStr = $enDateObj->format($format);
        $filenameWithoutExtension = tempnam($_SERVER['DOCUMENT_ROOT'] . '/tmp', "Stats-{$stDateStr}_{$enDateStr}-");
        unlink($filenameWithoutExtension);
        return $filenameWithoutExtension . '.xlsx';
    }
}