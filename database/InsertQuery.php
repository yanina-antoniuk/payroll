<?php

class InsertQuery
{
    /* Prepares insert query which is then passed as an argument to the queryRun() method
     * of the DatabaseQueryRunner class.
     */
     /**
     * @param $table
     * @param array $columns
     * @return string
     */
    public function insert($table, array $columns)
    {
        $insert_query = "insert into " . $table . " (".
            implode(',', array_keys($columns))
                .") values ( '" .
                    implode('\', \'', array_values($columns)) ."')";

        return $insert_query;
    }
}
