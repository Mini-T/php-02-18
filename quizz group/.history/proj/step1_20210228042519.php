<?php
require_once("header.inc.php");
try {
    $pdo = new PDO("mysql:host=localhost;dbname=réseau", "root", "");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();
}
$result = $pdo->query('SELECT * FROM utilisateur');;
while ($Showresult = $result->fetch(PDO::FETCH_OBJ)) { ?>
    <p>

        <?php

        // var_dump($Showresult);
        echo $Showresult->ign;

        ?>
        
        <br/>
        
        <?php

        echo $Showresult->id;

        ?>
        
        <br/>
        
        <?php

        echo $Showresult->email;

        ?>
        
        <br/>
        
        <?php

        echo $Showresult->mdp ;

        ?>
        
        <br/>

    </p>
<?php } ?>