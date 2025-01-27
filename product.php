<?php
include 'inc/head.php';
if(!$_SESSION || !isset($_SESSION["loggedIn"])) {
    die("You have to be logged in first!");
}

$pid = $_GET["pid"];
include 'classes/ProductClass.php';
$prod = new Product;
$product = $prod->loadProductById($pid);
?>

<div class="singleProdContainer box">
    <img src="img/<?= $product["image"]?>" alt="">
    <h2><?= $product["name"]?></h2>
    <p><?= $product["description"]?></p>
    <h2><?= $product["price"]?>€</h2>
    <form action="" method="POST">
        <input type="number" name="quantity" min="1" max="99" step="1" value="1">
        <button type="submit" name="addToCartBtn">Add to cart</button>
    </form>
</div>

<?php
if(isset($_POST["addToCartBtn"])){
   if($prod->addProductToCart($product["id"], $_POST["quantity"])) {
        echo "Product has been added to the cart!";
   };
}
include 'inc/footer.php';
?>