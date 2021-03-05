<?php
include("header.inc.php");
try {
    $pdo = new PDO("mysql:host=localhost;dbname=réseau", "root", "");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();
}
$SimpleSelect = $pdo->query('SELECT * FROM utilisateur'); ?>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h1 class="card-title">Login</h5>
            <form method="POST" action="#">
                <input type="text" class="form-control" name="email" placeholder="email">
                <input type="text" class="form-control" name="Username" placeholder="Username">
                <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Password">
                <br>
                <button type="submit" class="btn btn-primary" name="register">Login</button>
            </form>
    </div>
</div>
