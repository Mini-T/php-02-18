<?php
include("header.inc.php");
setcookie('memory', $_POST['stillconnect']);

try {
    $pdo = new PDO("mysql:host=localhost;dbname=réseau", "root", "");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();
}
?>
<form method="POST" action="#">

    <div class="card">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                    </div>
                    <input type="text" class="form-control champs" name="email">
                </div>
                <?php
                if (!empty($_POST)) {


                    $SimpleSelect = $pdo->query('SELECT * FROM utilisateur');

                    $postign = $_POST['Username'];

                    $postmdp = $_POST['mdp'];
                    $cryptmdp = md5($postmdp);
                    // f52b0e2f046b486f880d021b6c4d4ff9
                    // f52b0e2f046b486f880d021b6c4d4ff9

                    $logindetection = $pdo->query("SELECT ign, mdp FROM utilisateur WHERE ign = '$postign' AND mdp = '$cryptmdp'");
                    $fetchassocshowLOGIN = $logindetection->fetch(PDO::FETCH_ASSOC);
                    echo $fetchassocshowLOGIN['mdp'];
                    if ($fetchassocshowLOGIN['mdp'] == true) {
                        header('Location:Accueil.php');
                        session_start();
                        $_SESSION['username'] = $_POST['Username'];
                        $_SESSION['e-mail'] = $_POST;
                        exit();
                    } else {
                        echo "Mauvais mot de passe ou Username";
                    }
                };
                ?>
    </div>
</form>
<?php include("footer.inc.php"); ?>