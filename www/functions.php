<?php

$var = "Hallo";

function myName ($data) {
    // echo $data;
    return $data;
}

$returnedValue = myName('Hallo');

/**
 * Does something
 * @param $param
 * @param string $param2
 * @param String $param3
 * @return array
 */
function myName2 ($param, $param2 = "hallo", String $param3) : Int
{
    return 20;
}

$name = "myName";

// $name("hallo");

function manyArgs ($name, $plz, $phone = null, ...$args) {
    var_dump($args);
}

manyArgs(1,2,3,4,5,6,7,8);