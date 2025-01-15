<?php
session_start();
if(!$_SESSION || !isset($_SESSION["loggedIn"])) {
    die("You have to be logged in first!");
}

?>
<pre>
    <?php print_r($_SESSION);?>
</pre>

<form action="" method="post">
    <button type="submit" name="logoutbtn">Logout</button>
</form>

<?php
if(isset($_POST{"logoutbtn"})) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

?>