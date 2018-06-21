<?php
/**
 * Created by PhpStorm.
 * User: mstockenberg
 * Date: 21.06.18
 * Time: 10:01
 */

namespace classes;


class PageAction
{

    const PAGE_METHODS = [
        'contact' => [
            'class' => Test::class,
            'actions' => [
                'submit' => 'submitFunc',
                'read' => 'readFunc'
            ],
        ]
    ];

}