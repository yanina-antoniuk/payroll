<?php

require_once (__DIR__.'/../controllers/PayrollsController.php');

/**
 * Data collection and sanitization from the edit form
 */

class EditFormHandler
{
    /**
     * @param $post_array
     * @return mixed
     */
    public static function editHandle($post_array)
    {
        if(isset($post_array)) {
            $values_array = [
                'last_name' => strval(strip_tags($post_array['last_name'])),
                'first_name' => strval(strip_tags($post_array['first_name'])),
                'produced_products_amount' => intval(strip_tags($post_array['produced_products_amount'])),
                'department' => strval(strip_tags($post_array['department'])),
                'salary' => floatval(strip_tags($post_array['salary'])),
            ];
            $id = intval(strip_tags($post_array['id']));
            $payroll_controller = new PayrollsController($values_array);

            return $payroll_controller->update($values_array, $id);
        }
    }
}

