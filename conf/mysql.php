<?php

$host = '127.0.0.1';
$dbname = 'mds_b1_g1';
$user = 'root';
$password = 'root';

try {
    $dbh = new PDO('mysql:dbname=' . $dbname . ';host=' . $host.';port=8889', $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (PDOException $e) {
    die('Connexion échouée : ' . $e->getMessage());
}