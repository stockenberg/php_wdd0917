<?php


class MagicMethods{

    public $prefix = "ich werde ausgeführt wenn ein objekt ";

    public function __construct()
    {
        echo __CLASS__ .':'.__LINE__ . $this->prefix .
            "  instanziiert wird". PHP_EOL;
    }


    public function __destruct()
    {
        echo __CLASS__ .':'.__LINE__ . $this->prefix .
            " zerstört wird.." . PHP_EOL;
    }


    public function __clone()
    {
        echo __CLASS__ .':'.__LINE__ . $this->prefix .
            " gecloned wird" . PHP_EOL;
    }


    public function __get($name)
    {
        echo __CLASS__ .':'.__LINE__ . $this->prefix .
            " eine variable abruft die es nicht gibt" . PHP_EOL;
    }

    public function __set($name, $value)
    {
        echo __CLASS__ .':'.__LINE__ . $this->prefix .
            " eine variable gespeichert wird die es nicht gibt" . PHP_EOL;
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
    }

    public function __debugInfo()
    {
        // TODO: Implement __debugInfo() method.
    }

    public function __invoke()
    {
        // TODO: Implement __invoke() method.
    }

    public function __isset($name)
    {
        // TODO: Implement __isset() method.
    }

    public function __sleep()
    {
        // TODO: Implement __sleep() method.
    }

    public function __toString() : string
    {
        // TODO: Implement __toString() method.
    }

    public function __unset($name)
    {
        // TODO: Implement __unset() method.
    }

    public function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    public static function __callStatic($name, $arguments)
    {
        // TODO: Implement __callStatic() method.
    }

    public static function __set_state($an_array)
    {
        // TODO: Implement __set_state() method.
    }
}


$magic = new MagicMethods();
$cloneMagic = clone $magic;
$magic->test;
$magic->test = "test";

