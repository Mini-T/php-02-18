<?php

$fichier = file("sauvegarde.txt");

// var_dump($fichier);

foreach($fichier as $cle => $ligne){
    echo $ligne . "<br>";

}
echo implode($fichier, "<br>");