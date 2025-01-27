<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shop Gruppe 2</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <div class="navbar">
        <div class="logo">Shop G2</div>
        <div class="links">
            <a href="shop.php">Shop</a>
            <a href="cart.php">Cart</a>

            <!--
            <a href="http://">Link 3</a>
            <a href="http://">Link 4</a>
 -->
        </div>
        <div class="usermenu">
                <form action="" method="post">
                    <button type="submit" name="logoutbtn">Logout</button>
                </form>
        </div>
        <?php
        if (isset($_POST["logoutbtn"])) {
            session_unset();
            session_destroy();
            header("Location: login.php");
            exit();
        }
        ?>
    </div>