<?php
/**
 * Created by PhpStorm.
 * User: mstockenberg
 * Date: 20.06.18
 * Time: 12:01
 */

namespace classes;


class Test
{
    public function __construct()
    {
        echo "constructed_test";
    }

    public function submitFunc()
    {
        echo "submitted";
    }

    public function about()
    {
        echo "about";
    }

    public function home()
    {
        echo "home";
    }
}