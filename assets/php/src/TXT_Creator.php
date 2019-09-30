<?php

namespace CallBack;

class TXT_Creator extends Creator
{
    public function Create(): Writer
    {
        return new TXT_Writer;
    }
}