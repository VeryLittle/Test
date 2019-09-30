<?php

namespace CallBack;

class CallBackModel {
    public $name;
    public $email;
    public $message;

    function __construct($name, $email, $message) {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }
}