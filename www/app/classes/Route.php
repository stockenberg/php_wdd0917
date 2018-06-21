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

    /**
     * Gets a Page parameter, Classname and Action
     * If Classname and Action are set, then the Class will be instanciated.
     * If the action is set, the method of the given class will be executed.
     * @param $get
     * @param null $classname
     * @param null $action
     */
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