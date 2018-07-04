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


// Prepare data
$user = [
    'username' => 'Hallo',
    'password' => password_hash('Hallo', PASSWORD_DEFAULT, ['cost' => 12]),
    'role_id' => 1,
];

/**
 * Queries! (Abfragen)
 */

// Statement vorbereiten
$SQL = 'INSERT INTO users (username, password, role_id) VALUE (:username, :password, :role_id)';
$stmt = $db->prepare($SQL);

// Statement ausführen
echo $stmt->execute([
    ':username' => $user['username'],
    ':password' => $user['password'],
    ':role_id' => $user['role_id'],
]);

?>
