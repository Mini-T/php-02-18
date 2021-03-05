
<?php
if (isset($_COOKIE['memory'])) {
    session_start();
    
    $_SESSION['username'] = $_COOKIE['memory'];
    $thatuser = $_SESSION['username'];
    setcookie('memory', $thatuser, time() + 31536000);
}

include("header.inc.php");
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=réseau", "root", "");

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {

        echo "Connection failed: " . $e->getMessage();
    }
    $SimpleSelect = $pdo->query('SELECT * FROM utilisateur'); ?>

    <form method="POST" action="#">

        <div class="input-group input-group-lg">
            <div class="input-group-prepend">
                <span class="input-group-text oui" id="inputGroup-sizing-lg">Large</span>
            </div>
            <input type="text" class="form-control champs" name="email" >
        </div>
        <div class="input-group input-group-lg">
            <div class="input-group-prepend">
                <span class="input-group-text oui" id="inputGroup-sizing-lg">Large</span>
            </div>
            <input type="text" class="form-control champs" name="Username" aria-label="default" aria-describedby="inputGroup-sizing-sm">
        </div>
        <div class="input-group input-group-lg">
            <div class="input-group-prepend">
                <span class="input-group-text oui" id="inputGroup-sizing-lg">Large</span>
            </div>
            <input type="password" class="form-control champs" name="mdp" aria-label="default" aria-describedby="inputGroup-sizing-sm">
            <input class="btn btn-primary" type="submit" value="Submit" name="register">
        </div>
        <?php

        $postign = $_POST['Username'];
        $postmdp = $_POST['mdp'];
        $crypt = md5($_POST['mdp']);
        $postmail = $_POST['email'];
        setcookie('user_id', 'your_id');
        if (!empty($_POST['email'] and $_POST['Username'] and $_POST['mdp'])) {

            $register = "INSERT INTO utilisateur(email, ign, mdp) VALUES ('" . $_POST['email'] . "', '" . $_POST['Username'] . "', '" . $crypt . "')";


            $SelectCountM = $pdo->query("SELECT COUNT(*) FROM utilisateur WHERE email = '$postmail'");

            $SelectCountI = $pdo->query("SELECT COUNT(*) FROM utilisateur WHERE ign = '$postign'");


            $fetchassocshowM = $SelectCountM->fetch(PDO::FETCH_COLUMN);

            $fetchassocshowI = $SelectCountI->fetch(PDO::FETCH_COLUMN);


            echo '<br>';


            if ($fetchassocshowM > 0 or $fetchassocshowI > 0) {
                if ($fetchassocshowM > 0) { ?>
                    <p>
                        e-mail déjà attribué
                    </p>
                    <br>
                    <button><a href="FormLogin.php">Login</a></button>
                <?php } elseif ($fetchassocshowI > 0) { ?>
                    <p>
                        TON PUTAIN D'IGN EST DEJA PRIS PAUVRE MERDE
                    </p>
                    <br>
                    <button><a href="FormLogin.php">Login</a></button>

                <?php }
            } else {
                try {
                    $pdo->exec($register); ?>
                    <h1> enregistré</h1>
                    <a href="FormLogin.php">Login</a>
            <?php } catch (PDOException $e) {
                    echo "command failed" . $e->getmessage;
                }
            }
        } else { ?>
            <p>Remplis tous les putains de champs</p>

        <?php } ?>

        </div>
    </form>
    <?php include("footer.inc.php"); ?>