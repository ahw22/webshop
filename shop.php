<?php
include 'inc/head.php';
if (!$_SESSION || !isset($_SESSION["loggedIn"])) {
    die("You have to be logged in first!");
}

?>



<div class="productContainer box">
    <?php
    include 'classes/ProductClass.php';
    $prod = new Product;
    $products = $prod->loadAllProducts();
    foreach ($products as $product) { ?>
        <a href="product.php?pid=<?= $product["id"] ?>" class="product">
            <img src="img/<?= $product["image"] ?>" alt="">
            <h2><?= $product["name"] ?></h2>
            <h3><?= $product["price"] ?>€</h3>
        </a>
    <?php }
    ?>
</div>

</body>


<?php include 'inc/footer.php'; ?>