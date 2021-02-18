<form action="" method="POST">

    <input type="text" name="titre" id="titre" placeholder="Titre">
    <input type="text" name="texte" id="texte" placeholder="texte">
    <input type="text" name="Image" id="Image" placeholder="Chemin de l'image">
    <input type="submit" name="envoyer" id="envoyer">

</form>

<?php
if (!empty($_POST)) {
    echo $_POST['titre'];
    echo $_POST['texte'];
    echo $_POST['image'];
    $marequete = "INSERT INTO actualites(titre, texte, image) VALUE('".$_POST['titre']."', '" .$_POST['image'];


}
