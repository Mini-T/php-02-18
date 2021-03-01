<?php 
require_once("quizz group/header.inc.php");
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=réseau", "root", ""); 

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            var_dump($pdo);

        } catch(PDOException $e) {

            echo "Connection failed: " . $e->getMessage();
        }