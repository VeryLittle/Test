<?php

require_once 'vendor/autoload.php';

// проверка капчи
if($_POST['name'] || $_POST['js_input']!=='js_input') {
    // Бот 
}
else {
    $creator = new \CallBack\MySQL_Creator();
    echo $creator->Write(new \CallBack\CallBackModel($_POST['f_name'],$_POST['email'],$_POST['message']));
}
    