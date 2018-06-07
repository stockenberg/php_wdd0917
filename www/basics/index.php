<?php


class Writer{

    public $arr;


    public function __set($name, $value)
    {
        $this->arr[$name] = $value;
    }

    public function __get($name)
    {
        return $this->arr[$name] ?? null;
    }

}

$writer = new Writer();

$writer->test = "Hallo";
$writer->test2 = "Hallo";
$writer->test3 = "Hallo";
$writer->test4 = "Hallo";

var_dump($writer);

echo $writer->test;