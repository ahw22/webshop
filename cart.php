<?php
include 'inc/head.php';
if (!$_SESSION || !isset($_SESSION["loggedIn"])) {
    die("You have to be logged in first!");
}
?>

<div class="cartContainer ">
    <?php
    include 'classes/ProductClass.php';
    $prod = new Product;
    $cartItems = $prod->loadCart();

    foreach ($cartItems as $ci) { ?>
        <div class="cartItem">
            <img src="img/<?= $ci["image"] ?>" alt="">
            <h3 class="ciName"><?= $ci["name"] ?></h3>
            <h3>€ <?= $ci["price"] ?></h3>
            <form method="post">
                <input type="number" name="quantity" min="1" max="99" step="1" value="<?= $ci["quantity"] ?>">
                <input type="hidden" name="pid" value="<?= $ci["pid"] ?>">
                <button type="submit" name="updateBtn">Update</button>
                <button type="submit" name="deleteBtn">Delete</button>
            </form>
            <h2>€ <?= $ci["price"] * $ci["quantity"] ?></h2>
        </div>
    <?php }
    if (isset($_POST["updateBtn"])) {
        $prod->updateCartItem($_POST["quantity"], $_POST["pid"]);
    }
    if (isset($_POST["deleteBtn"])) {
        $prod->deleteCartItem($_POST["pid"]);
    }
    ?>
</div>




















<?php include 'inc/footer.php';