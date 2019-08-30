<?php

include_once './Model.php';

class SearchFormHandler
{
    /**
     * Data from the search field is collected,
     * sanitized and passed to the representation layer
     * @param $query
     * @return array
     */
    public static function query($query)
    {
        if(isset($query)) {
            $model = new Model();

           return $model->selectName(strip_tags($query));
        }
    }
}

