<?php include 'inc/head.php';?>

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

<?php include 'inc/footer.php' ?>