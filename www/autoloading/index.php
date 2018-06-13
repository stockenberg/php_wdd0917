<?php
/**
 * Created by PhpStorm.
 * User: mstockenberg
 * Date: 13.06.18
 * Time: 10:27
 */

require_once ('vendor/autoload.php');

/*
 *
 * spl_autoload_register(function($param){
    echo str_replace('\\', '/', $param) . ".php";
    require_once (str_replace('\\', '/', $param) . ".php");
});
 */

$user = new \autoload\classes\user\User();
$test = new \autoload\classes\test\Test();


var_dump($user);
var_dump($test);