<?php
/**
 * Created by PhpStorm.
 * User: mstockenberg
 * Date: 13.06.18
 * Time: 10:59
 */

require_once ('vendor/autoload.php');

$app = new classes\App();
$app->init();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <nav>
        <a href="?p=home">Startseite</a>
        <a href="?p=about">About</a>
        <a href="?p=contact">Contact</a>
    </nav>

    <h2>Hallo OOP</h2>
    <?php require('pages/' . \classes\helper\Route::validPage() .  '.php') ?>

</body>
</html>
