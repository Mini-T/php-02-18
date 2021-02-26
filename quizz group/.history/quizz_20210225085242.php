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
$question = array(1 => $q1, 2 => $q2);
$q1 = new question;
$q1->content = "que disent 2 fesses dans une pirogue ?";
$q1->reponse = "dis-donc ça commence à ramer du cul là non ?";

$q2 = new question;
$q2->content = "qu'est ce qu'une chauve souris avec une perruque ?";
$q2->reponse = "Une souris.";

?>
<form method="POST" action="">
    <?php echo $q1->content;
     foreach ($question as $key => $reponse) {?> <br>
    
    <input type="text" name="r1" id="r1" placeholder="Votre réponse"> <br>
    <input type="submit" name="envoyer" id="envoyer"> <br>
    
    <?php 
    
    if(!empty($_POST['i'])){
        echo $_POST['ix']
        if($_POST['i'] == $key){
            echo "bonne réponse";
        } else {
            echo "mauvaise réponse";
        }
    }
}
?>

    

</form>
</body>
</html>
