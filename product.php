<?php
include 'inc/head.php';
if(!$_SESSION || !isset($_SESSION["loggedIn"])) {
    die("You have to be logged in first!");
}

$pid = $_GET["pid"];
include 'classes/ProductClass.php';
$prod = new Product;
$product = $prod->loadProductById($pid);
print_r($product);
?>

