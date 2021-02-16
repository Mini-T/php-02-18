<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AHAHAHAHAH</title>
    <link rel="stylesheet" href="main.css">
    <style>
        #Acc {
            background-color: grey;
        }

        #rech {
            height: 68px;
        }
    </style>
</head>

<body>

    <?php include("header.inc.php");
    if (!empty($_COOKIE['LANG'])) {
        $lang = $_COOKIE['LANG'];
    }
    ?>
    <?php
    if ($lang == $_GET["lang"]) {
    }

    if (!empty($_GET["lang"])) {
        switch ($_GET["lang"]) {
            case 'FR' ?>
            <h1>quoi de neuf l'ami ?</h1>

        <?php break;
            case 'ENG' ?>
        <h1>sup' nigga</h1>
<?php break;
        }
    } ?>




<div id="titre">
    <h1>

    </h1>
    <p>

    </p>
    <?php
    $prenom = "Nicolas, Marie, Grégoire, Sylvain, Celine";
    echo "<p>Ce genre de $prenom</p>";
    $listePrenom = array("Gregoire", "Nathalie", "Emilie", "Francois", "Georges");

    echo "ouai mon gars c'est ";
    echo $listePrenom[0];
    ?>

</div>

<?php
$Liste = array("Absalon", "Aymerick", "Affo", "clément", "Matteo", "Ugo", "Nell", "Nathanaël", "Lorraine", "Sélomé", "Henri", "Sarah", "Jennifer", "Karim", "Luca", "Titouan");
shuffle($Liste);
echo $Liste[0];
?>
<div>
    <p>sexe : </p>
    <a href="page.php?sexe=Homme">Homme</a>
    <a href="page.php?sexe=Femme">Femme</a>


</div>


<form method="POST" action="">

    <input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo">

    <input type="email" name="email" id="email" placeholder="Votre email">

    <input type="submit" value="Envoyer">

    <input type="text" name="adresse" id="adresse" placeholder="votre adresse">

</form>

<?php if (!empty($_POST)) {

    var_dump($_POST);
    echo $_POST["pseudo"] . "-";
    echo $_POST["email"] . "-";
    echo $_POST["adresse"];
    $f = fopen("sauvegarde.txt", "a");
    fwrite($f, $_POST["pseudo"] . "\n");
    fwrite($f, $_POST["email"] . "\n");
    fwrite($f, $_POST["adresse"] . "\n");
    $f = fclose($f);
} ?>
<?php
setCookie("LANG", "FR", time() + 31536000);
var_dump($_COOKIE);
echo time();
echo $_COOKIE["LANG"];


?>
<form method="SESSION" action="">
<?php session_start();
if (!empty($_SESSION['pseudo'])){
?> <p> votre IGN est :</p> <?php echo $_SESSION['Pseudo'];
}else { ?>
<input type="text" name="boxign" id="boxign" placeholder="Pseudo">
<?php } ?>
z  <input type="text" name="boxmail" id="boxmail">
    <input type="submit" name="envoyer" id="envoyer">
</form>
</br>
</br>
<?php //var_dump($connection);
$result = $connection->query("INSERT INTO actualité(Titre, Texe, Image) VALUE ('Titre test', 'Texte test', 'img test')");
//$result = $connection->query("UPDATE actualité //SET titre = 'Mon titre modifié WHERE //id_actualité = 5");
//var_dump($result);//
// $result = $connection->query("DELETE FROM actualité WHERE id_actualité = 4");
// $result = $connection->query("SELECT * FROM actualité");
$result = $connection->query("SELECT * From actualité");
while($actualité = $result->fetch_assoc()){ ?>

<div class="card">
    <div class="card-body">
        <img src="<?php echo $actualité['image']?>" alt="">
    </div>
</div>

<?php   }   ?>






</body>

</html>