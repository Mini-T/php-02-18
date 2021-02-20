<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Les objets </h1>

    <?php
    
    class Voiture{
    public $couleur;
    public $annee;

    function __construct($c, $a){
        $this->couleur = $c;
        $this->annee = $a;
    }

    public function demarrer(){
        return "mais c'était sur en fait."
        . $this->couleur;
        }
            
    }

    $clio1 = new Voiture;
    $clio1 -> couleur = "Fiente";
    $clio1->annee = 2010;
    echo "Ma bite a la couleur $clio1->couleur" . "<br>";
    echo $clio1->demarrer();

    $clio2 = new Voiture;
    $clio2->couleur = "Noir";
    $clio2->annee = 2010;
    echo "Ma clio a la couleur
    $clio2->couleur". "<br>";
    echo $clio2->demarrer();

    echo "<br>";
    ?>
</body>
</html>