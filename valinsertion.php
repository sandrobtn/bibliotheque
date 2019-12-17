<?php
    include "helper.php";

    $Prenom_auteur = postVar("prenom_auteur");
    $Nom_auteur = postVar("nom_auteur");
    $date_naissance_auteur = postVar("date_naissance_auteur");
    $



    $inserauteur = "INSERT INTO auteur ( Nom_auteur, Prenom_auteur, Datenaissance_auteur) VALUES ('$Nom_auteur','$Prenom_auteur','$date_naissance_auteur')";
    requete($inserauteur);
    $inserlivre = "INSERT INTO livre ( titre_livre, Dateedition_livre, ID_auteur, ID_editeur, ID_livre_GENRE, chemin_img, desc_livre) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])";
    requete($inserlivre);
    
?>