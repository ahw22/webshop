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
            <input type="text" name="username" id="" placeholder="Username" required> <br>
            <input type="email" name="email" id="" placeholder="E-mail" required> <br>
            <input type="password" name="pw" id="" placeholder="Password" required> <br>
            <input type="password" name="pwconfirm" id="" placeholder="Confirm Password" required> <br>
            <button type="submit" name="signupbtn">Sign Up</button> <br>
            Already have an account? <a href="login.php">Login here!</a>
        </form>
        <?php
        if(isset($_POST["signupbtn"])) {
            if ($_POST["pw"] !== $_POST["pwconfirm"]) {
                echo "Passwords do not match!";
            }
            include "classes/UserClass.php";
            $user = new User;
            $user->signUpUser($_POST);
        }


        ?>
    </div>
</body>

</html>