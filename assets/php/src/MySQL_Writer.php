<?php

namespace CallBack;

class MySQL_Writer implements Writer
{
    public function Write(CallBackModel $model): string
    {
        // Реализация записи в БД
        $db = \CallBack\Database::getInstance();

        $db_table = "callback"; 

        $sql = "INSERT INTO $db_table (name,email,message) VALUES ('".  $db->escape_string($model->name)."','".
                                                                        $db->escape_string($model->email)."','".
                                                                        $db->escape_string($model->message)."')";

        return $db->query($sql);
    }
}