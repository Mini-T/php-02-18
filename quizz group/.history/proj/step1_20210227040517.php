<?php 
require_once("header.inc.php");
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=réseau", "root", ""); 

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            var_dump($pdo);

        } catch(PDOException $e) {

            echo "Connection failed: " . $e->getMessage();
        }
        echo $pdo-> query("SELECT 'ign', 'mdp', 'email' FROM 'login'")