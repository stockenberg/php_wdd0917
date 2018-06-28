<?php

class Database {

    public $db; 

    public function __construct(){
        $dbh = new PDO('mysql:host=localhost;dbname=example_cms', 'root', 'secret');
        $this->db = $dbh;
    }

}


$databaseObj = new Database();

$SQL = 'SELECT * FROM users';

$stmt = $databaseObj->db->prepare($SQL);
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);


print_r($res);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <ul>
        <?php foreach($res as $index => $user) : ?>
        <li>ID: <?= $user['id'] ?> und der Username ist: <?= $user['username'] ?></li>    
        <?php endforeach; ?>
    </ul>
    
</body>
</html>