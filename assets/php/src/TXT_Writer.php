<?php

namespace CallBack;

class TXT_Writer implements Writer
{
    public function Write(CallBackModel $model): string
    {
        // Реализация записи в TXT файл
        return true;
    }
}