<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts1/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css1/style.css">
</head>
<body>
	<div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Register</h2>
                        <form action="islem.php" method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="kullanici_ad" id="name" required="" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="surname"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="kullanici_soyad" id="surname" required="" placeholder="Your Surname"/>
                            </div>
                            <div class="form-group">
                                <label for="idnumber"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="kullanici_idnum" id="idnumber" required="" placeholder="Passport or ID Number"/>
                            </div>
                             <div class="form-group">
                                <label for="telephonenumber"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="kullanici_telefon" id="telephonenumber" required="" placeholder="Telephone Number"/>
                            </div>
                            <div class="form-group">
                                <label for="country"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="kullanici_ulke" id="country" required="" placeholder="Your Country"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="kullanici_email" id="email" required="" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="kullanici_sifre" id="pass" required="" placeholder="Password"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>

                        </form>
                    </div>

                    <div class="signup-image">
                        <figure><img src="img/logo.png" alt="sing up image"></figure>
                         <br><br><a href="index.php" class="signup-image-link">Back</a>
                    </div>
                </div>
            </div>
        </section>

</body>
</html>