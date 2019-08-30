<?php

require (__DIR__.'/DatabaseConnector.php');

class DatabaseQueryRunner extends DatabaseConnector
{
    /* A child of DatabaseConnector class.
       On using its parent method, it connects to database
       and runs prepared queries.*/
    /**
     * @param $statement
     * @return array
     * Executes prepared statements
     */
    public function queryRun($statement)
    {
        $credentials = require("settings.php");
        $query = parent::connect($credentials['db']);
        $prepare = $query->prepare("{$statement}");
        $prepare->execute();

        return $prepare->fetchAll();
    }
}
