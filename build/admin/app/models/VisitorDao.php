<?php

use Illuminate\Database\Connection;

class VisitorDao
{
    const DATE_TIME_FORMAT = 'c';

    /**
     * @var Connection
     */
    private $conn;

    public function __construct()
    {
        $this->conn = DB::connection('mysql');
    }

    public function getMinDate()
    {
        $result = $this->conn->selectOne('SELECT MIN(time) as min FROM visits');
        return self::formatDate($result->min);
    }

    public function getMaxDate()
    {
        $result = $this->conn->selectOne('SELECT MAX(time) as max FROM visits');
        return self::formatDate($result->max);
    }

    public function getLastFewVisits($numVisits)
    {
        return $this->conn->select('SELECT email, tool, time FROM visits ORDER BY time DESC LIMIT ' . $numVisits);
    }

    public function getAllVisits($startTime, $endTime)
    {
        $query = "SELECT email, tool, time FROM visits WHERE time >= '$startTime' AND time <= '$endTime' ORDER BY time DESC";
        return $this->conn->select($query);
    }

    public function getVisitCounts($startTime, $endTime)
    {
        $query = "SELECT tool, email, count(*) as visitCount FROM visits WHERE time >= '$startTime' AND time <= '$endTime' GROUP BY tool, email ORDER BY tool ASC";
        return $this->conn->select($query);
    }

    public function getToolCounts($startTime, $endTime)
    {
        $query = "SELECT tool, count(*) as 'toolCount' FROM visits WHERE time >= '$startTime' AND time <= '$endTime' GROUP BY tool ORDER BY tool ASC";
        return $this->conn->select($query);
    }

    public function getNewUsers($startTime, $endTime)
    {
        $query = "SELECT DISTINCT table1.email AS email, table1.tool AS tool FROM (SELECT email, tool FROM visits WHERE time >= '$startTime' AND time <= '$endTime') AS table1 LEFT JOIN (SELECT email, tool FROM visits WHERE time < '$startTime') AS table2 ON table1.email = table2.email WHERE table2.email IS NULL ORDER BY table1.email ASC";
        return $this->conn->select($query);
    }

    private static function formatDate($time)
    {
        $date = new DateTime($time);
        return $date->format(self::DATE_TIME_FORMAT);
    }
}
