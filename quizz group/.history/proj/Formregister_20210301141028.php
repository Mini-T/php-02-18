<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="FormRegister.css">

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

        <div class="card">
            <div id="border">
                <div id="container">
                    <input type="email" id="email" name="email" placeholder="e-mail">
                    <br>
                    <input type="text" id="Username" name="Username" placeholder="Username">
                    <br>
                    <input type="password" id="mdp" name="mdp" placeholder="Password">
                    <br>
                    <input type="submit" id="register" name="register" value="Register">

                    <?php
                    if (!empty($_POST['email'] and $_POST['Username'] and $_POST['mdp'])) {
                        // var_dump($_POST);
                        $postmail = $_POST['email'];

                        $postign = $_POST['Username'];

                        $postmdp = $_POST['mdp'];


                        $register = "INSERT INTO utilisateur(email, ign, mdp) VALUES ('" . $_POST['email'] . "', '" . $_POST['Username'] . "', '" . $_POST['mdp'] . "')";


                        $SelectCountM = $pdo->query("SELECT COUNT(*) FROM utilisateur WHERE email = '$postmail'");

                        $SelectCountI = $pdo->query("SELECT COUNT(*) FROM utilisateur WHERE ign = '$postign'"); var_dump($_POST['mdp']);


                        $fetchassocshowM = $SelectCountM->fetch(PDO::FETCH_COLUMN);

                        $fetchassocshowI = $SelectCountI->fetch(PDO::FETCH_COLUMN);


                        if ($fetchassocshowM > 0 or $fetchassocshowI > 0) {
                            // echo $fetchassocshowI;
                            // echo $fetchassocshowM;
                            if ($fetchassocshowI > 0) {
                                echo "TON PUTAIN D'IGN EST DEJA PRIS PAUVRE MERDE";
                                echo "<br>";
                            }
                            if ($fetchassocshowM > 0) { ?>
                                <p>T'as déjà un putain de compte avec ce mail. Sale merde.</p>
                        <?php }
                        } else {
                            try {
                                $pdo->exec($register);
                                echo 'enregistré';
                            } catch (PDOException $e) {
                                echo "command failed" . $e->getmessage;
                            }
                        }
                    } else { ?>
                        <P>Remplis tous les putains de champs</P>
                       
                    <?php } ?>

                </div>
            </div>
        </div>
    </form>
    <!-- <?php $SimpleSelect = $pdo->query('SELECT * FROM utilisateur');
            while ($fetchobjshow = $simpleSelect->fetch(PDO::FETCH_OBJ)) { ?>
        <p>

            <?php

                // echo $fetchobjshow->ign; 

            ?>

            <br />

            <?php

                // echo $fetchobjshow->id; 

            ?>

            <br />

            <?php

                // echo $fetchobjshow->email; 

            ?>

            <br />

            <?php

                // echo $fetchobjshow->mdp; 

            ?>

            <br />

        </p>
    <?php } ?> -->
</body>

</html>