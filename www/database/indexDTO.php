<?php
/**
 * Created by PhpStorm.
 * User: mstockenberg
 * Date: 04.07.18
 * Time: 10:56
 */

/**
 * SETUP
 */
// Set credentials
$dsn = 'mysql:host=localhost;dbname=example_cms;charset=utf8';
$user = 'root';
$pass = 'secret';

// Connect to Database
$db = new PDO($dsn, $user, $pass);

// Config Database: Errors
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


/**
 * Queries! (Abfragen)
 */

// Statement vorbereiten
$SQL = 'SELECT * FROM users';
$stmt = $db->prepare($SQL);

// Statement ausführen
$stmt->execute();

// Ergebnis aus der DB holen
require_once ('User.php');
$res = $stmt->fetchAll(PDO::FETCH_CLASS, User::class);


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

    <table border>
        <thead>
            <tr>
                <td>id</td>
                <td>username</td>
                <td>password</td>
                <td>role_id</td>
                <td>created_at</td>
                <td>updated_at</td>
            </tr>
        </thead>
        <tbody>
            <?php
            /**
             * @var User $user
             */
            foreach ($res as $index => $user) : ?>
                <tr>
                    <td><?= $user->getId() ?></td>
                    <td><?= $user->getUsername() ?></td>
                    <td><?= $user->getPassword() ?></td>
                    <td><?= $user->getRoleId() ?></td>
                    <td><?= $user->getCreatedAt() ?></td>
                    <td><?= $user->getUpdatedAt() ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
