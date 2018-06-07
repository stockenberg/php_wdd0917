<?php
/**
 * Created by PhpStorm.
 * User: mstockenberg
 * Date: 07.06.18
 * Time: 12:03
 */



class Test{
    public $color;

    public function __construct()
    {

    }
}

class ScndTest{

    public $test;

    public function __construct()
    {
        $this->test = new Test();
    }

}

$new = new ScndTest();

$new->test->color;