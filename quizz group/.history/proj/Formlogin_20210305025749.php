<?php
include("header.inc.php");
try {
    $pdo = new PDO("mysql:host=localhost;dbname=réseau", "root", "");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();
}
?>


<div class="card" style="width: 18rem;">
    <div class="card-body">
     <h1 class="card-title titre">Login</h5>
        <form method="POST" action="#">
            <input type="text" class="form-control champs" name="Username" placeholder="Username">



            <input type="password" class="form-control champs" id="mdp" name="mdp" placeholder="Password">


            <input type="checkbox" class="form-check-input" id="stillConnect" name="stillConnect" value="Rester connecté">
            <label for="stillConnect">Rester connecté</label>

            <br>

            <button type="submit" class="btn btn-primary login" name="register">Login</button>
        </form>
    </div>
</div>

<?php
if (!empty($_POST)) {

    $SimpleSelect = $pdo->query('SELECT * FROM utilisateur');

    $postign = $_POST['Username'];

    $postmdp = $_POST['mdp'];
    $cryptmdp = md5($postmdp);
    

    $logindetection = $pdo->query("SELECT ign, mdp FROM utilisateur WHERE ign = '$postign' AND mdp = '$cryptmdp'");
    $fetchassocshowLOGIN = $logindetection->fetch(PDO::FETCH_ASSOC);
    echo $fetchassocshowLOGIN['mdp'];
    if ($fetchassocshowLOGIN['mdp'] == true) {
        // header('Location:Accueil.php');
        session_start();
        $_SESSION['username'] = $_POST['Username'];
        $_SESSION['e-mail'] = $_POST['e-mail'];
        // exit();
    } else {
        echo "Mauvais mot de passe ou Username";
    }
    if (isset($_POST['stillConnect'])) {
        setcookie('memory', $_POST['stillConnect']);
    }
}
?>
<?php include("footer.inc.php"); ?>