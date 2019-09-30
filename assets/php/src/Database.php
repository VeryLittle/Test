<?php

namespace CallBack;

class Database
{
    private static $instances = [];

    private $mysql_connection;

    protected function __construct() { }

    protected function __clone() { }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a database.");
    }

    public static function getInstance(): Database
    {
        $cls = static::class;
        if (!isset(static::$instances[$cls])) {
            $db_host = "localhost"; 
            $db_user = "root"; 
            $db_password = "";
            $db_base = 'testcallback';

            static::$instances[$cls] = new static;
            static::$instances[$cls]->mysql_connection = new \mysqli($db_host,$db_user,$db_password,$db_base);
            static::$instances[$cls]->mysql_connection->set_charset('utf8');
        }
        return static::$instances[$cls];
    }

    public function query($sql)
    {
        return $this->mysql_connection->query($sql);
    }

    public function escape_string($str)
    {
        return $this->mysql_connection->escape_string($str);
    }
}