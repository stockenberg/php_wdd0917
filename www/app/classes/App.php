<?php
/**
 * Created by PhpStorm.
 * User: mstockenberg
 * Date: 13.06.18
 * Time: 10:59
 */
namespace classes;

class App
{

    private $whitelist = ['home', 'about', 'contact'];

    public function init()
    {
        var_dump($_GET);
    }

    /**
     * Checks if the given GET-Parameter is in the Whitelist,
     * checks if File Exists, return valid page string
     * @return string
     */
    public function validPage()
    {
        if(isset($_GET['p'])){
            if(in_array($_GET['p'], $this->whitelist)){
                if(file_exists('pages/' . $_GET['p'] . '.php')){
                    return $_GET['p'];
                }
                return '404';
            }
        }
        return 'home';
    }
    
}