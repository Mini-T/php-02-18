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

}

$q1 = new question;
$content = "que disent 2 fesses dans une pirogue ?";
$reponse = "dis-donc ça commence a ramer du cul là non ?";

$q2 = new question;
$content = "qu'est ce qu'une chauve souris avec une perruque ?";
$reponse = "Une souris ";

?>
<form method="POST" action="">
   <?php echo $q1->content ?>
    <input type="text" name="q1" id="q1" placeholder="Votre réponse">
    

</form>
</body>
</html>
