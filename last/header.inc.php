<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
</head>

<?php include("data.php")?>

<body>
    
    <header>
    
    </header>

    <Nav id="rech">

<a href="index.php" id="Acc">Accueil</a>

<a href="actualité.php" id="Actuali">Actualité</a>

<a href="contact.php" id="Contact">Contact</a>


    <a href="?lang=FR">Français </a>
   <a href="?lang=ENG"> Anglais</a>

</Nav>
<?php 
    setcookie("langue", $_GET["lang"], time() + 31536000);
    if (!empty($_GET["lang"])) {
        setcookie("langue", $_GET["lang"], time() + 31536000);
        echo "langue : ".$_GET["lang"];
    }
    ?>
    <?php include('init.inc.php')?>
    
   
