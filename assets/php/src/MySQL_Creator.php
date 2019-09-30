<?php

namespace CallBack;

class MySQL_Creator extends Creator
{
    public function Create(): Writer
    {
        return new MySQL_Writer;
    }
}