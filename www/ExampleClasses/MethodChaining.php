<?php



class Chain{

    public $color;

    public function one()
    {
        $this->color .= "AA";
        return $this;
    }

    public function two()
    {
        $this->color = $this->color[0] . 'green' . $this->color[1];
        return $this;
    }

    public function three()
    {
        echo $this->color;
        return $this;
    }

}

$chain = new Chain();
$chain->one()
    ->two()
    ->three();

var_dump($chain);