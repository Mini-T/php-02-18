<?php
include("header.inc.php");
try {
    $pdo = new PDO("mysql:host=localhost;dbname=réseau", "root", "");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();
}
?>
<form method="POST" action="#">

    <div class="card">

        <div class="zone">
            <div class="affi">
                <div class="input-group-prepend">
                    <input type="text" class="form-control champs" name="Username" placeholder="Username">
                </div>
                <div class="zone">
                    <div class="input-group-prepend"> 
                        
                        
                        <input type="text" class="form-control champs" name="mdp" placeholder="Password">
                    </div>
                </div>
                <input type="checkbox" class="form-check-input" id="stillConnect" name="stillConnect" >
                <br>
                <button type="submit" class="btn btn-primary login" name="register">Login</button>
            </div>
        </div>
    </div>
</form>
<?php
if (!empty($_POST)) {

    setcookie('memory', $_POST['stillconnect']);

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
}
?>
<?php include("footer.inc.php"); ?>