<?php require_once("header.inc.php"); ?>
<?php if (isset($_COOKIE['memory'])) {
    session_start();
    
    $_SESSION['username'] = $_COOKIE['memory'];
    $thatuser = $_SESSION['username'];
    setcookie('memory', $thatuser, time() + 31536000);
}
?>


<h1 class="display-1"> Bonjour <?php echo $_SESSION['username'] ?> </h1>



<?php require_once("footer.inc.php"); ?>