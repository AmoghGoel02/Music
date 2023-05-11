<?php

session_start();
include('db_connect.php');
$msg = false;
if (isset($_POST['user_name'])) {
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];

    $query = "select * from user where user = '".$user_name."' AND password = '".$user_password."' limit 1";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result)==1) {
        header('Location: index.php');
    } else {
        $msg = "Incorrect Password";
    }
    
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Website Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/728a841025.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", () => {
  const log = console.log,
    array = ["img/signup/1.jpg", "img/signup/2.jpg", "img/signup/3.jpg", "img/signup/5.jpg", "img/signup/6.jpg", "img/signup/7.jpg", "img/signup/8.jpg", "img/signup/9.jpg", "img/signup/10.jpeg", "img/signup/11.jpg"],
    random = Math.floor(Math.random() * array.length),
    target = document.getElementById("target");
  target.src = `${array[random]}`;
  log(target);
});
</script>
</head>
<body>
    <header>
        <div class="left_bx1">
            <div class="content">
                <form method="post">
                    <h3>Login</h3>
                    <div class="card">
                        <label for="name">Name</label>
                    <input type="text" name="user_name" placeholder="Enter Your Username...." required>
                    </div>
                    <div class="card">
                        <label for="password">Password</label>
                    <input type="password" name="user_password" placeholder="Enter Your Password...." required>
                    </div>
                    <input type="submit" value="Login" class="submit">
                    <div class="check">
                        <input type="checkbox" name="" id=""><span>Remember me</span>
                    </div>
                    <p>Don't hava an account yet?<a href="signup.php">Sign Up</a></p>
                </form>
            </div>
        </div>

        <div class="right_bx1">
        <img id="target" src="img/signup/1.jpg" alt="">
           <!-- <img src="img/43.jpg" alt="">
            <!--<h3>Incorrect Password</h3>-->
            <?php
            echo ('<h3>'.$msg.'</h3>');
            ?>
        </div>
    </header>
</body>
</html>