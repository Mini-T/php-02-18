<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="FormRegister.css">
    <?php
    
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=réseau", "root", "");

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {

        echo "Connection failed: " . $e->getMessage();
    }
    $SimpleSelect = $pdo->query('SELECT * FROM utilisateur');

    $postign = $_POST['Username'];

    $postmdp = $_POST['mdp'];

    $logindetection = $pdo->query("SELECT COUNT(*) FROM utilisateur WHERE ign = '$postign' AND mdp = '$postmdp'");
    $fetchassocshowLOGIN = $logindetection->fetch(PDO::FETCH_COLUMN);

    

     ?>
</head>

<body>
<form method="POST" action="#">

<div class="card">
    <div id="border">
        <div id="container">
            
            <input type="text" id="Username" name="Username" placeholder="Username">
            <br>
            <input type="password" id="mdp" name="mdp" placeholder="Password">
            <br>
            <input type="submit" id="login" name="login" value="Login">
            <br>
            <?php 
            // var_dump($logindetection);
            echo $fetchassocshowLOGIN
            ;
            ?>


        </div>
    </div>
</div>
</form>
</body>
</html>