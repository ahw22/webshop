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
    <div class="box">
        <form action="" method="post">
            <input type="text" name="username" id="" placeholder="Username/Email" required> <br>
            <input type="text" name="pw" id="" placeholder="Password" required> <br>
            <button type="submit" name="loginbtn">Login</button> <br>
            Don't have an account? <a href="signup.php">Register here!</a>
        </form>
        <?php
        if(isset($_POST["loginbtn"])) {
            include "classes/UserClass.php";
            $user = new User;
            if($user->loginUser($_POST)) {
                echo "User login sucessful!";
            } else {
                echo "User login failed!";
            }
        }


        ?>
    </div>
</body>

</html>