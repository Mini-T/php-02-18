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

$q1 = new question;
$q1->content = "que disent 2 fesses dans une pirogue ?";
$q1->reponse = "dis-donc ça commence à ramer du cul là non ?";

$q2 = new question;
$q2->content = "qu'est ce qu'une chauve souris avec une perruque ?";
$q2->reponse = "Une souris.";

?>
<form method="POST" action="">
   ²<?php echo $q1->content?>
    
    <input type="text" name="q1" id="q1" placeholder="Votre réponse">
 
    <?php if(strcmp)

    

</form>
</body>
</html>
