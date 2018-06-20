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
    public static $whitelist = ['home', 'about', 'contact'];
    private $request;

    public $page_methods = [
        'contact' => [
            'class' => Test::class,
            'actions' => [
                'submit' => 'submitFunc',
                'read' => 'readFunc'
            ],
        ]
    ];

    public function init()
    {
        $this->request = array_merge($_POST, $_GET);

        Route::get(
            $this->request['p'],
            $this->page_methods[$this->request['p']]['class'] ?? null,
            $this->page_methods[$this->request['p']]['actions'][$this->request['action']] ?? null
        );


    }


    /**
     * Checks if the given GET-Parameter is in the Whitelist,
     * checks if File Exists, return valid page string
     * @return string
     */
    public function validPage(): string
    {
        if (isset($_GET['p'])) {
            if (in_array($_GET['p'], App::$whitelist)) {
                if (file_exists('pages/' . $_GET['p'] . '.php')) {
                    return $_GET['p'];
                }
                return '404';
            }
        }
        return 'home';
    }


}