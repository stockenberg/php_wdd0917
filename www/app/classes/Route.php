<?php
/**
 * Created by PhpStorm.
 * User: mstockenberg
 * Date: 20.06.18
 * Time: 11:52
 */

namespace classes;


class Route
{

    public static function get($get, $classname = null,  $action = null)
    {
        if (isset($get)) {
            if (in_array($get, App::$whitelist)) {
                if ($action !== null && $classname !== null) {
                    $test = new $classname();
                    $test->$action();
                }
            }
        }
    }


    public static function post()
    {
        
    }

}