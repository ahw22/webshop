<?php
session_start();
if(!$_SESSION || !isset($_SESSION["loggedIn"])) {
    die("You have to be logged in first!");
}

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
    <div class="box">
 <form action="" method="post">
            <button type="submit" name="logoutbtn">Logout</button>
        </form>


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