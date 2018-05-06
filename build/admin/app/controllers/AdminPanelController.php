<?php

use Illuminate\Support\Facades\Response;
use Symfony\Component\Process\Exception\RuntimeException;
use Whoops\Example\Exception;

class AdminPanelController extends BaseController
{
    const LAST_NUM_VISITS = 20;

    /**
     * @var VisitorDao
     */
    private $visitorDao;

    public function __construct()
    {
        $this->visitorDao = new VisitorDao();
    }

    public function index()
    {
        $lastFewVisits = $this->visitorDao->getLastFewVisits(self::LAST_NUM_VISITS);
        return View::make('index', array('lastFewVisits' => $lastFewVisits));
    }

    public function getDateRange()
    {
        $minDate = $this->visitorDao->getMinDate();
        $maxDate = $this->visitorDao->getMaxDate();
        return Response::json(array('min' => $minDate, 'max' => $maxDate));
    }

    public function getReport()
    {
        $startDate = $this->getStartOfDay(Input::get('startDate'));
        $endDate = $this->getEndOfDay(Input::get('endDate'));
        $detailed = strcasecmp(Input::get('detailed'), 'false') === 0 ? false : true;
        try {
            $spreadsheetMaker = new SpreadsheetMaker($startDate, $endDate, $detailed);
            $response = array('reportLink' => $spreadsheetMaker->getSpreadsheet());
        } catch (RuntimeException $ex) {
            $response = array('error' => true);
        }
        return Response::json($response);
    }

    private function getStartOfDay($dateString)
    {
        $date = new DateTime($dateString);
        $date->setTime(0, 0, 0);
        return $date->format('Y-m-d H:i:s');
    }

    private function getEndOfDay($dateString)
    {
        $date = new DateTime($dateString);
        $date->setTime(23, 59, 59);
        return $date->format('Y-m-d H:i:s');
    }
}
