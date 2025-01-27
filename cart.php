<?php
include 'inc/head.php';
if(!$_SESSION || !isset($_SESSION["loggedIn"])) {
    die("You have to be logged in first!");
}
?>


























<?php include 'inc/footer.php';