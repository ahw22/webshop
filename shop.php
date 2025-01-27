<?php
include 'inc/head.php';
if(!$_SESSION || !isset($_SESSION["loggedIn"])) {
    die("You have to be logged in first!");
}

?>

    <div class="box">
        <form action="" method="post">
            <button type="submit" name="logoutbtn">Logout</button>
        </form>
    </div>    

    <div class="productContainer box">
        <?php
            include 'classes/ProductClass.php';
            $prod = new Product;
            $products = $prod -> loadAllProducts();
            foreach ($products as $product) { ?>
                <a href="product.php?pid=<?= $product["id"]?>" class="product">
                    <img src="img/<?= $product["image"] ?>" alt="">
                    <h2><?= $product["name"]?></h2>
                    <h3><?= $product["price"]?></h3>
            </a>
            <?php }
        ?>
    </div>

</body>    
<!-- <pre>
    <?php #print_r($_SESSION);?>
</pre>    
 -->
<?php
if(isset($_POST{"logoutbtn"})) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}
?>
<?php include 'inc/footer.php';?>