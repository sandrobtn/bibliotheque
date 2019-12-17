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
</head>
<body>
    <?php
        echo "Connecté à la base de donné <br>";

        $Prenom_client = postVar("fname");
        $Nom_client = postVar("lname");
        $username_client = postVar("username");
        $email_client = postVar("email");
        $password_client = postVar("password");
        $Adresse1_client = postVar("adresse1");
        $Adresse2_client = postVar("adresse2");
        $Ville_client = postVar("Ville");
        $CP_client = postVar("Code_postal");
        $Dateenaissance_client = postVar("date_de_naissance");
        $Civilite_client = postVar("sexe");
        $ID_client_abonnement = postVar("abonnement");

        echo "<br>";

        $pass_hache = password_hash($password_client, PASSWORD_DEFAULT);

        $creationmembres = "INSERT INTO client ( Nom_client, Prenom_client, Dateenaissance_client, e_mail_client, Adresse1_client, Adresse2_client, Ville_client, CP_client, Civilite_client, username_client, password_client, ID_client_ABONNEMENT) VALUES ('$Nom_client','$Prenom_client','$Dateenaissance_client','$email_client','$Adresse1_client','$Adresse2_client','$Ville_client','$CP_client','$Civilite_client','$username_client','$pass_hache','$ID_client_abonnement')";
        requete($creationmembres);

    ?>

    <table>
        <tbody>

    <?php

        if ($resultat) {

            echo "Inscription terminé !";

           /* while ($ligne = $resultat->fetch()) {


                echo "<tr><td>" . $ligne["ID_client"] . "</td><td>" . $ligne["Nom_client"] . "</td><td>" . $ligne["Prenom_client"] . "</td><td>"
                . $ligne["Dateenaissance_client"] . "</td><td>" . $ligne["e_mail_client"] . "</td><td>" . $ligne["Adresse1_client"] . "</td><td>"
                . $ligne["Adresse2_client"] . "</td><td>" . $ligne["Ville_client"] . "</td><td>" . $ligne["CP_client"] . "</td><td>" . $ligne["Civilite_client"] . "</td><td>"
                . $ligne["username_client"] . "</td><td>" . $ligne["password_client"] . "</td><td>" . $ligne["ID_client_ABONNEMENT"] . "</td></tr>";
            }*/
    ?>

        </tbody>
    </table>

    <?php

        $resultat->closeCursor();
        } else {
            $str = "Impossible d'accèder à la bd";
            echo addslashes($str);
        }

    ?>
</body>
</html>
