<?php
    include "config.php";
    if(!isset($_SESSION['member_data'])){
        header('Location: index.php');
    }
    if(isset($_POST['but_logout'])){
        session_destroy();
        header('Location: index.php');
    }
?>

<!doctype html>
<html>
    <head></head>
    <body>
        <h1><?php echo $_SESSION['member_data']["name"] ?></h1>
        <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
    </body>
</html>