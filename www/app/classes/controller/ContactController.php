<?php
/**
 * Created by PhpStorm.
 * User: mstockenberg
 * Date: 21.06.18
 * Time: 10:26
 */

namespace classes\controller;


use classes\helper\StatusLog;
use classes\helper\Validate;
use classes\model\Contact;

class ContactController
{
    

    public function submit()
    {
        $validate = new Validate($_POST['contact']);
        $res = $validate->clearInput();

        if(empty(StatusLog::allEntries()['contact'])){
            $contact = new Contact();
            $contact->sendMail($res);
        }
    }

}