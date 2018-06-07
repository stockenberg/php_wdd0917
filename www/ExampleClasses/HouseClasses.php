<?php

class House{

    public $color;

    public function __construct($color)
    {
        $this->color = $color;
        echo "Hey yippi hütte fertig!";
    }

    public function ringRing()
    {
        echo "ringRIng";
        $this->color;
    }

}

class ModernHouse extends House {

    public function smartHome()
    {
        echo "iam so smart...";
        $this->ringRing();
    }

    public static function ip()
    {
        echo "Hallo";
    }

}






