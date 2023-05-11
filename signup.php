<?php
session_start();

include('db_connect.php');
$msg = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_re_password = $_POST['user_re_password'];

    if (!empty($user_name) && !empty($user_email) && !empty($user_password) && !is_numeric($user_name)) {
        if ($user_password === $user_re_password) {
            $query = "insert into user (user, email, password) VALUES ('$user_name', '$user_email', '$user_password')";
            mysqli_query($con, $query);
            header("Location: login.php");
        }else{
            $msg = "Password Does Not Match";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Website Sign Up</title>
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
                    <h3>Sign Up</h3>
                    <div class="card">
                        <label for="name">Name</label>
                    <input type="text" name="user_name" placeholder="Enter Your Username...." required>
                    </div>
                    <div class="card">
                        <label for="email">Email</label>
                        <input type="email" name="user_email" placeholder="Enter Your Email...." required>
                        </div>
                        <div class="card">
                        <label for="password">Password</label>
                    <input type="password" name="user_password" placeholder="Enter Your Password...." required>
                    </div>
                    <div class="card">
                        <label for="re-password">Enter Your Password Again</label>
                    <input type="password" name="user_re_password" placeholder="Password...." required>
                    </div>
                    <input type="submit" value="Sign Up" class="submit">
                    <div class="check">
                        <input type="checkbox" name="" id=""><span>Remember me</span>
                    </div>
                    <p>Already Have an Account ?<a href="login.php">Log In</a></p>
                </form>
            </div>
        </div>

        <div class="right_bx1">
        <img id="target" src="img/signup/1.jpg" alt="">
            <!--<img src="img/27.jpeg" alt="">
           <!-- <h3>Incorrect Password</h3>-->
           <?php 
           echo('<h3>'.$msg.'</h3>');
           ?>
        </div>
    </header>
</body>
</html>