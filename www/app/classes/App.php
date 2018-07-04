<?php
/**
 * Created by PhpStorm.
 * User: mstockenberg
 * Date: 13.06.18
 * Time: 10:59
 */

namespace classes;

use classes\config\PageAction;
use classes\helper\Route;

class App
{
    private $request;

    public function init()
    {
        $this->request = array_merge($_POST, $_GET);
        Route::get(
            $this->request['p'] ?? '',
            PageAction::PAGE_METHODS[$this->request['p'] ?? '']['class'] ?? null,
            PageAction::PAGE_METHODS[$this->request['p'] ?? '']['actions'][$this->request['action'] ?? ''] ?? null
        );

    }


}