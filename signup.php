<?php include 'inc/head.php' ?>
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
    if (isset($_POST["signupbtn"])) {
        if ($_POST["pw"] !== $_POST["pwconfirm"]) {
            echo "Passwords do not match!";
        }
        include "classes/UserClass.php";
        $user = new User;
        if ($user->signUpUser($_POST)) {
            echo "User sucessfuly registered!";
        } else {
            echo "User could not be registered.";
        }
    }


    ?>
</div>

<?php include 'inc/footer.php' ?>