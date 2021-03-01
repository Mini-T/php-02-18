<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=réseau", "root", "");

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {

        echo "Connection failed: " . $e->getMessage();
    } ?>
</head>

<body>

</body>

</html>

<!-- <?php $result = $pdo->query('SELECT * FROM utilisateur');
while ($Showresult = $result->fetch(PDO::FETCH_OBJ)) { ?>
    <p>

        <?php echo $Showresult->ign; ?>

        <br />

        <?php echo $Showresult->id; ?>

        <br />

        <?php echo $Showresult->email; ?>

        <br />

        <?php echo $Showresult->mdp; ?>

        <br />

    </p> -->
<?php } ?>