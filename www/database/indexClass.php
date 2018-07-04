<?php
/**
 * Created by PhpStorm.
 * User: mstockenberg
 * Date: 04.07.18
 * Time: 12:12
 */

require ('DB.php');

$SQL = 'SELECT * FROM users';
$res = DB::fetch($SQL);

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
            <?php foreach ($res as $index => $user) : ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= strtoupper($user['username']) ?></td>
                    <td><?= $user['password'] ?></td>
                    <td><?= $user['role_id'] ?></td>
                    <td><?= $user['created_at'] ?></td>
                    <td><?= $user['updated_at'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>

