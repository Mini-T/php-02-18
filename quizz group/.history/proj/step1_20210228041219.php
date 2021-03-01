<?php
require_once("header.inc.php");
try {
    $pdo = new PDO("mysql:host=localhost;dbname=réseau", "root", "");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();
}
$result = $pdo->query('SELECT * FROM utilisateur');
$Showresult = $result->fetch(PDO::FETCH_OBJ);
echo $Showresult->$Showresult;
