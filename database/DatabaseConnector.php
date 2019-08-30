<?php

class DatabaseConnector
{
    /**
     * Creates connection to database
     * the credentials are taken from an array in setting.php.
     * @param array $credentials
     * @return PDO|string
     */
    public static function connect(array $credentials)
    {
        try {
            return new PDO("mysql:host={$credentials['db_host']};dbname={$credentials['db_name']}",
                        $credentials['db_username'],
                        $credentials['db_password']);
        } catch (PDOException $exception) {
           return ($exception->getMessage());
        }
    }
}
