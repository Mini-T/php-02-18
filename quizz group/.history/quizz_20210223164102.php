<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

class question{
    public $content;
    public $reponse;

}

$q = new question;
$q->content = "que disent 2 fesses dans une pirogue ?";
$q->reponse = "dis-donc ça commence à ramer du cul là non ?";


?>
<form method="POST" action="">
    <?php 
    foreach($q as $cle => $valeur) {
    echo $q->content?> <br>
    
    <input type="text" name="r1" id="r1" placeholder="Votre réponse"> <br>
    <input type="submit" name="envoyer" id="envoyer"> <br>
   
<?php } ?>
    

</form>
</body>
</html>
