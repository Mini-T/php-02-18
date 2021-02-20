<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        #Actuali {
            background-color: grey;
        }
    </style>
    <?php require("data.php") ?>
</head>

<body>
<?php include("header.inc.php") ?>
    <?php foreach ($actualites as $key => $actualites) { ?>
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $actualites['Titre'] ?></h5>
                <p class="card-text"><?php echo $actualites['texte'] ?></p>
                <a href="page1.php" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div id="paralaxe">
        <?php } ?>
        </div>

        <div id=pos>
        <?php session_start();
        $mail = $_SESSION['boxmail'];
        $Name = $_SESSION['boxign'];
        echo $Name;
        echo $mail;
        ?>
        <form method ="SESSION" action="">
        <input type="text" name="boxign" id="boxign">
        <input type="text" name="boxmail" id="boxmail">
        <input type="submit" name="envoyer" id="envoyer">
        </form>

            <div id="titre">
                <h1>
                    Ce genre de page d'accueil mon frère
                </h1>
                <p>
                    Tu connais lacoste TN le sang.
                </p>
            </div>
        </div>
</body>

</html>