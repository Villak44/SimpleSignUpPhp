<?php
    include "config.php";
    
    if(isset($_POST['but_submit'])){
        $member_username = mysqli_real_escape_string($con,$_POST['txt_uname']);
        $member_password = mysqli_real_escape_string($con,$_POST['txt_pwd']);
    
        if ($member_username != "" && $member_password != ""){
            $sql_query = "SELECT * FROM users WHERE username='".$member_username."' and password='".$member_password."'";
            $result = mysqli_query($con, $sql_query);
            $row = mysqli_fetch_array($result);
    
            if(count($row) > 0){
                $_SESSION['member_data'] = $row;
                header('Location: home.php');
            }else{
                echo "Invalid username and password";
            }
    
        }
    
    }
?>

<html>
    <head>
        <title>Create simple login page with PHP and MySQL</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container" style="width:400px;">
            <h1>Login</h1>
            <form method="post" action="" style="display: inline;">
                <input style="width:100%;" type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username">
                <input style="width:100%;" type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password">
                <div style="display:inline-flex; width:100%;">
                    <input style="width:50%;" type="submit" value="Submit"   name="but_submit">
                    <input style="width:50%;" type="submit" value="Register" name="but_register">
                </div>
            </form>
        </div>
    </body>
</html>

