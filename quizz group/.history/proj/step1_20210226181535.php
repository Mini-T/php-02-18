<?php try {
            $pdo = new PDO("mysql:host=localhost;dbname=réseau", "root", ""); 

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            echo "fuck yeah";

        } catch(PDOException $e) {

            echo "Connection failed: " . $e->getMessage();
        }