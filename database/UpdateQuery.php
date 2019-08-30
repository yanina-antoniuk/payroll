<?php

class UpdateQuery
{
    /* Prepares update query which is passed as an argument
       to the queryRun() method of the DatabaseQueryRunner class. */
    /**
     * @param $table
     * @param array $columns
     * @param $id
     * @return string
     */
    public function update($table, array $columns, $id)
    {
        $update_query = "update " . $table . " set last_name='" . $columns['last_name'] .
            "', first_name='" . $columns['first_name'] .
            "', produced_products_amount='" .$columns['produced_products_amount'] .
            "', department='" .$columns['department'].
            "',  salary='" . $columns['salary'] . "' where id=" . $id;

        return $update_query;
    }

}