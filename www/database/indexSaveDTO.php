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
require_once ('User.php');

$user = new User();
$user->setUsername('Marten');
$user->setPassword('1234');
$user->setRoleId(1);

/**
 * Queries! (Abfragen)
 */

// Statement vorbereiten
$SQL = 'INSERT INTO users (username, password, role_id) VALUE (:username, :password, :role_id)';
$stmt = $db->prepare($SQL);

// Statement ausführen
echo $stmt->execute([
    ':username' => $user->getUsername(),
    ':password' => $user->getPassword(),
    ':role_id' => $user->getRoleId(),
]);

?>
