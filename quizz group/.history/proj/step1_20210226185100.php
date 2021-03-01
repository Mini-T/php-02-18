<?php 
require_once("C:\xampp\htdocs\php-02-18\quizz group\header.inc.php");
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=réseau", "root", ""); 

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            var_dump($pdo);

        } catch(PDOException $e) {

            echo "Connection failed: " . $e->getMessage();
        }