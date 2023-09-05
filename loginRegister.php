<?php

require_once "connection.php";

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="googlebot" content="noarchive" />
    <meta name="Revisit-After" content="5 hour" />
    <meta name="robots" content="index,contact" />
    <meta name="copyright" content="2023 Copyright Hazal Nur Asma" />
    <link href="loginRegister.css" type="text/css" rel="stylesheet">
    <title>Slay Recipes | Sign in & Sign up</title>
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
</head>



<body>

    <div class="container">

        <div class="header">
            <img class="logo" src="./images/logo.png">
            <!--<span class="altbas">Evcil Hayvanlar İçin E-Randevu Platformu</span>-->
            <marquee class="subTitle" direction=right>Join the food's world with us!</marquee>
        </div>
        <div class="form-box">
            <div class="button">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Sign In</button>
                <button type="button" class="toggle-btn" onclick="register()">Sign Up</button>
            </div>
            <div class="ation">
                <lottie-player src="https://lottie.host/a6b487d7-c646-4d5b-8b2e-14080bdd27e2/4vBI72WhuV.json" background="transparent" speed="1" loop autoplay></lottie-player>
            </div>

            <form id="Login" class="inputs" action="process.php" method="POST">
                <?php
                if (isset($_GET["kayit"]) == "ok") {
                    echo "<h5>Registration Successful!</h5>";
                }
                ?>
                <input type="text" class="input-field" placeholder="User Name" name="userName" required>
                <input type="password" class="input-field" placeholder="Password" name="userPwd" required>
                <br><a href="#">I forgot my password</a>
                <button type="submit" class="submit-btn" name="btn_giris">Sign In</button>
            </form>
            <form id="Register" class="inputs" action="process.php" method="POST">
                <input type="text" class="input-field" placeholder="User Name" name="userName" required>
                <input type="email" class="input-field" placeholder="E-Mail" name="userMail" required>
                <input type="password" class="input-field" placeholder="Password" name="userPwd" required>
                <br>
                <!--<a href="#">By registering, you agree to the Terms, Data Policy and Cookies Policy.</a>-->
                <input type="checkbox" value="yes" required>
                <span class="onay">By registering, you agree to the Terms, Data Policy and Cookies Policy.</span>
                <button type="submit" class="submit-btn" name="btn_kayit">Submit</button>
            </form>
        </div>
        <div class="footter">
            <h2>CONTACT</h2>
            <div class="content-footter">
                <div class="info anime-top">
                    <img src="./images/mail.png" class="mini-item">
                    <p>asmahazalnur@gmail.com</p>
                </div>
                <div class="info anime-bottom">
                    <img src="./images/phone.png" class="mini-item">
                    <p>Phone Number: <br><br> +90 578 xxx xxxx</p>
                </div>
                <div class="info anime-top">
                    <img src="./images/location.png" class="mini-item">
                    <p> Adres:<br><br> Spring street, No: 2/A</p>
                </div>
            </div>

        </div>
    </div>


    <script>
        window.sr = ScrollReveal();

        sr.reveal('.anime-top', {
            origin: 'top',
            duration: 1000,
            distance: '25rem',
            delay: 300,
        })

        sr.reveal('.anime-bottom', {
            origin: 'bottom',
            duration: 1000,
            distance: '25rem',
            delay: 300,
        })
    </script>

    <script>
        var x = document.getElementById("Login");
        var z = document.getElementById("Register");
        var y = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            z.style.left = "0px";
            y.style.left = "110px";
        }

        function login() {
            x.style.left = "0px";
            z.style.left = "450px";
            y.style.left = "0px";
        }
    </script>




    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>



</body>

</html>