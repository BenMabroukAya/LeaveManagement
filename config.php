<?php
// Informations de connexion à la base de données MySQL
$host = 'localhost';
$dbname = 'gestion des congés';
$username = 'aya';
$password = 'ayaessat23:';

// Connexion à la base de données MySQL
$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
?>
