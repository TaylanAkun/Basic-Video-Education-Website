<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts1/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css1/style.css">
</head>
<body>
<center><h2 class="form-title">VIDEO EDUCATION SYSTEM</h2></center>
    

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="img/logo.png" alt="sing up image"></figure>    
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                         <!--<?php
                         if($_GET["signin"]="no"){
                            echo "Hatalı Şifre/Kullanıcı Adı";
                         }

                          ?>   -->
                        <form action="islem.php" method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="kullanici_email" id="your_email" required="" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="kullanici_sifre" id="your_pass" required="" placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            
                            <a href="register.php" class="signup-image-link">Create an Account</a>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

</body>
</html>