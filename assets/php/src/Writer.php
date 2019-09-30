<?php

namespace CallBack;

interface Writer
{
    public function Write(CallBackModel $model): string;
}