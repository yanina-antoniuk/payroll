<?php

include_once (__DIR__.'/database/DatabaseQueryRunner.php');
include_once (__DIR__.'/database/SelectQuery.php');
include_once (__DIR__.'/database/UpdateQuery.php');
include_once (__DIR__.'/database/InsertQuery.php');

class Model
{
    /**
     * @var string
     */
    //TODO: The $table variable should be assigned a
    // valid table name to test how the model works
    public $table = 'here';

    /**
     * @param $id
     * @return array
     */
    public function selectId($id)
    {
        $query_runner = new DatabaseQueryRunner();
        $select_query = new SelectQuery();

        return $query_runner->queryRun($select_query->selectById($this->table, $id));
    }

    /**
     * @param $name
     * @return array
     */
    public function selectName($name)
    {
        $query_runner = new DatabaseQueryRunner();
        $select_query = new SelectQuery();

        return $query_runner->queryRun($select_query->selectByName($this->table, $name));
    }

    /**
     * @return array
     */
    public function select()
    {
        $query_runner = new DatabaseQueryRunner();
        $select_query = new SelectQuery();

        return $query_runner->queryRun($select_query->selectAll($this->table));
    }
}





