<?php
    include "helper.php";
    include "menu.php";

?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
</head>
<body>

<?php

    $email = postVar('email');
    $password = postVar('psw');
    $requete = "SELECT e_mail_client,password_client FROM client where e_mail_client = '$email'";
    $verificationConnex = requete($requete);
    $resultat = $verificationConnex->fetch();
    
    $isPasswordCorrect = password_verify($password, $resultat['password_client']);

    if ($verificationConnex) {
        if ($isPasswordCorrect) {
            echo "Connecté";
        }else {
            echo "Identifiant ou mot de passe invalide";?>
            <div class="" id="myForm">
                <form action="profil.php" method="POST" class="form-container">
                    <h1>Login</h1>

                    <label for="email"><b>Email</b></label>
                    <input type="email" placeholder="Enter Email" name="email" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button type="submit" class="btn">Login</button>
                </form>
            </div>
    <?php
        }
        $verificationConnex->closeCursor();
    } else {
        $str = "Impossible d'accèder à la bd";
        echo addslashes($str);
    }

?>
</body>
</html>