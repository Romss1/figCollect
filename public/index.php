<?php


include "./../vendor/autoload.php";

$url =filter_input(INPUT_SERVER, 'PATH_INFO');
$table = require ('../config/routes.php');

if($url === null){
    $url = '/';
}

foreach ($table as $urlRoute => $route):

    if($url === $urlRoute){
       
        $cl = new $route['class'];
        $cl->{$route["method"]}();
    }

endforeach;