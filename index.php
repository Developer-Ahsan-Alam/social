<?php 
session_start();

if(isset($_SESSION['success'])){
    if($_SESSION['success'] = "success"){
       header("location: ./admin.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love Action</title>
    <link rel="stylesheet" href="./assets/css/reg.css">
</head>

<body>
<center>
                                 <?php
                                if(isset($_SESSION['result'])){
                                    if($_SESSION['result'] = "x"){
                                        echo ('<script>alert("! Wrong information , Please Try Again Later")</script>');
                                    }
                                }
                                if(isset($_GET['done'])){
                                    if($_SESSION['done'] = "done"){
                                        echo ('<script>alert("! Congratulations, registration successful , please login")</script>');
                                    }
                                }
                               
                                 ?>
            </center>
    <div class="wrapper">
        <div class="headeing">
           
            <center>
                <h2>Welcome To Love Action</h2>
            </center>
        </div>
        <div class="title-text">
            <div class="title login">
                Login
            </div>
            <div class="title signup">
                Signup
            </div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Signup</label>
                <div class="slider-tab"></div>
            </div>
            <div class="form-inner">


                <form action="./actions/login.php" method="post" class="login">
                    <div class="field">
                        <input name="email" type="text" placeholder="Email or mobile" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="pass-link">
                        <a href="#">Forgot password?</a>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Login">
                    </div>
                    <div class="signup-link">
                        Not a member? <a href="">Signup now</a>
                    </div>
                </form>


                <!-- signup form here -->
                <form action="./actions/registration.php" method="post" enctype="multipart/form-data" class="signup">
                    <div class="field">
                        <input type="text" placeholder="name" name="name" required>
                    </div>
                    <div class="field">
                        <span>Profile Picture</span>
                        <input type="file" name="image" required>
                    </div>
                    <div class="field">
                        <input type="text" name="email" placeholder="Email or Mobile" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="field">
                        <input type="password" name="confirmPassword" placeholder="Confirm password" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Signup">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        const loginText = document.querySelector(".title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const signupLink = document.querySelector("form .signup-link a");
        signupBtn.onclick = (() => {
            loginForm.style.marginLeft = "-50%";
            loginText.style.marginLeft = "-50%";
        });
        loginBtn.onclick = (() => {
            loginForm.style.marginLeft = "0%";
            loginText.style.marginLeft = "0%";
        });
        signupLink.onclick = (() => {
            signupBtn.click();
            return false;
        });
    </script>
</body>

</html>