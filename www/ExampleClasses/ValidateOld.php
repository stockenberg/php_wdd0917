<?php
/**
 * Created by PhpStorm.
 * User: mstockenberg
 * Date: 14.06.18
 * Time: 10:38
 */

namespace classes;


class ValidateOld
{

    public function clearInput($post): array
    {
        $res = [];

        if (!empty($post)) {
            if (!empty($post['email'])) {

                if (filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
                    $res['email'] = htmlentities(strip_tags($post['email']));
                } else {
                    StatusLog::group('contact', 'email', 'Deine E-Mail-Adresse ist falsch... du honk!');
                }
            } else {
                StatusLog::group('contact', 'email', 'Bitte fülle eine E-Mail Adresse aus.');
            }
            return $res;
        }

        return $res;
    }

}