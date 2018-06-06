<?php

// Primitive
$string = "Hallo";
$float = 20.2;
$bool = true;
$int = 20;

// Constants
define("MY_NAME", "hallo");
echo MY_NAME;


$casted = (int) $float;

var_dump($string);
var_dump($float);
var_dump($bool);
var_dump($int);

// Arrays
$myArr = ["Hallo", "Welt", "!"];
$myArrWithKeys = ["first" => "Hallo", "scnd" => "Welt", "third" => "!"];
$arrMixed = ["Hallo", "key" => "test", 22];
$arrMixed[] = "new value";
$arrMixed['nextKey'] = "new value2";
print_r($myArr);
print_r($myArrWithKeys);
echo $myArr[0]; // Hallo
var_dump($myArrWithKeys[0]);
var_dump($arrMixed);


// Multi Dimensional Arrays
$arrNDimensional = [
    0 => [
        "firstname" => "Marten"
    ],
];

echo $arrNDimensional[0]["firstname"];


