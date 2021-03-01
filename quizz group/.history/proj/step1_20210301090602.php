<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=réseau", "root", "");

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {

        echo "Connection failed: " . $e->getMessage();
    } ?>
</head>

<body>
    <form method="POST" action="#">

        <input type="email" id="email" name="email" placeholder="e-mail">
        <br>
        <input type="text" id="Username" name="Username" placeholder="Username">
        <br>
        <input type="password" id="mdp" name="mdp" placeholder="Password">
        <br>
        <input type="submit" id="register" name="register" value="Register">
        
        <?php
        if (!empty($_POST)) {
            $postmail = $_POST['email'];
            $requete = $pdo->query("SELECT COUNT(*) FROM utilisateur WHERE email= '$postmail'");
            $requete->fetch(PDO::FETCH_OBJ);
            echo $requete->postmail;
            // var_dump($_POST);
            // $register = "INSERT INTO utilisateur(email, ign, mdp) VALUES ('" . $_POST['email'] . "', '" . $_POST['Username'] . "', '" . $_POST['mdp'] . "')";
            // $pdo->exec($register);
        }
        
        ?>




    </form>
    <!-- <?php $result = $pdo->query('SELECT * FROM utilisateur');
    while ($Showresult = $result->fetch(PDO::FETCH_OBJ)) { ?>
        <p>

            <?php

            // echo $Showresult->ign; 
            
            ?>

            <br />

            <?php

            // echo $Showresult->id; 
            
            ?>

            <br />

            <?php

            // echo $Showresult->email; 
            
            ?>

            <br />

            <?php

            // echo $Showresult->mdp; 
            
            ?>

            <br />

        </p>
    <?php } ?> -->
</body>

</html>