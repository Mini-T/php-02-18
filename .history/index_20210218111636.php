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
    public function demarrer(){
        return "mais c'était sur en fait.";

        }
            
    }

    $clio1 = new Voiture;
    $clio1 -> couleur = "Rouge";
    $clio1->annee = 2010;
    echo "Ma clio a la couleur $clio1->couleur";
    
    ?>
</body>
</html>