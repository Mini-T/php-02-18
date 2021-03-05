<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="FormRegister.css">
    <?php
    setcookie('memory', $_POST['stillconnect']);

    try {
        $pdo = new PDO("mysql:host=localhost;dbname=réseau", "root", "");

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {

        echo "Connection failed: " . $e->getMessage();
    }
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
                    <input type="checkbox" id="stillconnect" name="stillconnect" value="Rester connecté">
                    <br>
                    <input type="submit" id="login" name="login" value="Login">
                    <br>
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
                            exit();
                        } else {
                            echo "Mauvais mot de passe ou Username";
                        }
                        session_start();
                        $_SESSION['username'] = $_POST['Username'];
                        $_SESSION[''];
                    };
                    ?>


                </div>
            </div>
        </div>
    </form>
</body>

</html>