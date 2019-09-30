<?php

namespace CallBack;

abstract class Creator
{
    abstract public function Create(): Writer;

    public function Write(CallBackModel $model): string
    {
        $writer = $this->Create();
        return $writer->Write($model);
    }
}