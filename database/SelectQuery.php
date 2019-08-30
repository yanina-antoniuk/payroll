<?php

class SelectQuery
{
    /* Prepares select queries which are used by queryRun() method
       of the DatabaseQueryRunner class.*/
    /**
     * @param $table
     * @return string
     * Selects all rows from a table
     */
    public function selectAll($table)
    {
        $select_query =  "select * from " . $table;

        return $select_query;
    }

    /**
     * @param $table
     * @param int $id
     * @return string
     * Selects rows by id
     */
    public function selectById($table, int $id)
    {
        $select_query = "select * from " . $table . " where id=" . $id;

        return $select_query;
    }

    /**
     * @param $table
     * @param string $name
     * @return string
     * Selects with like operator by first and last names
     */
    public function selectByName($table, string $name)
    {
        $select_query = "select * from " . $table . " where last_name like '%" . $name .
            "%' or first_name like '%" . $name . "%'";

        return $select_query;
    }
}