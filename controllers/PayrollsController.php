<?php

require_once (__DIR__.'/../database/DatabaseQueryRunner.php');
require_once (__DIR__.'/../database/SelectQuery.php');
require_once (__DIR__.'/../database/UpdateQuery.php');
require_once (__DIR__.'/../database/InsertQuery.php');


class PayrollsController
{

    /**
     * Constants
     * Products NET prices, which are used for salary
     * calculation formula
     */
    const INCOME_RATIO = 0.15;
    const TV = 1000;
    const COMPUTER = 1500;
    const MOBILE = 500;

    /**
     * @var
     */
    public $values;
    //TODO: The $table variable should be assigned a
    // valid table name to test how the controller works
    public $table = 'here';

    /**
     * PayrollsController constructor.
     * @param $values
     */
    public function __construct($values)
    {
        $this->values = $values;
    }

    /**
     * @return mixed
     */
    public function salaryCounter()
    {
        $product_cost = 0;
        if($this->values['department'] == 'tv sets') {
            $product_cost = self::TV;
        } elseif ($this->values['department'] == 'computers') {
            $product_cost = self::COMPUTER;
        } elseif ($this->values['department'] == 'mobile phones') {
            $product_cost = self::MOBILE;
        }
        $this->values['salary'] = $product_cost *
            $this->values['produced_products_amount'] *
                self::INCOME_RATIO;

        return $this->values['salary'];
    }

    /**
     * @return array
     */
    public function store()
    {
        if($this->salaryCounter()) {
            $query_runner = new DatabaseQueryRunner();
            $insert_query = new InsertQuery();
            $query_runner->queryRun($insert_query->insert($this->table, $this->values));
        }

        return require_once (__DIR__.'/../view.php');
    }

    /**
     * @param $post_array
     * @param $id
     * @return mixed
     */
    public function update($post_array, $id)
    {
        $query_runner = new DatabaseQueryRunner();
        $update_query = new UpdateQuery();
        $query_runner->queryRun($update_query->update($this->table, $post_array, $id));

        return require_once (__DIR__.'/../view.php');
    }
}