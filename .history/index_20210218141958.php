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
    
    // class Voiture{
    // public $couleur;
    // public $annee;

    // function __construct($c, $a){
    //     $this->couleur = $c;
    //     $this->annee = $a;
    // }

    // public function demarrer(){
    //     return "mais c'était sur en fait."
    //     . $this->couleur;
    //     }
    // function __destruct(){

    // }        
    // }
    

    // $clio1 = new Voiture("rouge", 2010);
    // echo "Ma bite a la couleur $clio1->couleur" . "<br>";
    // echo $clio1->demarrer();

    // $clio2 = new Voiture("blanche", 2009);
    // echo "Ma clio a la couleur $clio2->couleur". "<br>";
    // echo $clio2->demarrer();

    // echo "<br>";

    class fruit {
       private $name;
       public $poid;
       public $couleur;
       

        public function manger(){
            echo "Ici pour manger le fruit";
        }
    }

    class papaye extends fruit {
        public $provenance;

        public function cueillir() {
            echo "Ici pour cueillir la papaye";
        }
    }
$mapapaye = new papaye;
$mapapaye->provenance = "Amérique du sud";
$mapapaye->couleur = "Rouge";
var_dump($mapapaye)
    ?>
</body>
</html>