<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="Bootstrap.css">

    <?php
    $postign = $_POST['Username'];
    $postmdp = $_POST['mdp'];
    $crypt = md5($_POST['mdp']);
    $postmail = $_POST['email'];
    setcookie('user_id', 'your_id');
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=réseau", "root", "");

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {

        echo "Connection failed: " . $e->getMessage();
    }
    $SimpleSelect = $pdo->query('SELECT * FROM utilisateur'); ?>
</head>

<body>
    <form method="POST" action="#">

        <div class="input-group input-group-lg">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
            </div>
            <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
        </div>
        <div class="input-group input-group-lg">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
            </div>
            <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
        </div>
        <div class="input-group input-group-lg">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
            </div>
            <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
            <input class="btn btn-primary" type="submit" value="Submit">
        </div>
        


        <?php
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
</body>

</html>