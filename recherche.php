<?php
    include "config.php";
    include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Recherche</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
    <div class="container-livre">
    <?php

        $recherche = postVar('search');

        $searchlivretitre = "SELECT * FROM livre,auteur,editeur WHERE livre.ID_auteur=auteur.ID_auteur and livre.ID_editeur=editeur.ID_editeur and titre_livre like '%$recherche%'";
        $searchlivregenre = "SELECT * FROM livre,auteur,editeur WHERE livre.ID_auteur=auteur.ID_auteur and livre.ID_editeur=editeur.ID_editeur and genre like '%$recherche%'";
        $searchauteurprenom = "SELECT * FROM livre,auteur,editeur WHERE livre.ID_auteur=auteur.ID_auteur and livre.ID_editeur=editeur.ID_editeur and auteur.Prenom_auteur like '%$recherche%'";
        $searchauteurnom = "SELECT * FROM livre,auteur,editeur WHERE livre.ID_auteur=auteur.ID_auteur and livre.ID_editeur=editeur.ID_editeur and auteur.Nom_auteur like '%$recherche%'";
        $searchediteur = "SELECT * FROM livre,auteur,editeur WHERE livre.ID_editeur=editeur.ID_editeur and livre.ID_auteur=auteur.ID_auteur and Nom_editeur like '%$recherche%'";
        $resultSearchlivretitre = requete($searchlivretitre);
        $resultSearchlivregenre = requete($searchlivregenre);
        $resultSearchauteurnom = requete($searchauteurnom);
        $resultSearchauteurprenom = requete($searchauteurprenom);
        $resultSearchediteur = requete($searchediteur);

        $countlivretitre = $resultSearchlivretitre->rowCount();
        $countlivregenre = $resultSearchlivregenre->rowCount();
        //echo "$countlivre <br>";
        $countauteurprenom = $resultSearchauteurprenom->rowCount();
        $countauteurnom = $resultSearchauteurnom->rowCount();
        //echo "$countauteur <br>";
        $countediteur = $resultSearchediteur->rowCount();
        //echo "$countediteur <br>";



        if ($countlivretitre != 0){
            while ($ligne = $resultSearchlivretitre->fetch()) {
                /* echo "" . $ligne["titre_livre"]  . "<br>";
                echo "$ligne[0]"; */

                $phrase  = $ligne[1];
                $original = array("é", "à", "ê", "ë", "ï", "î");
                $nouveau   = array("e", "a", "e", "e", "i", "i");
                $ligne[1] = str_replace($original, $nouveau, $phrase);

                $ligne[1] = strtoupper($ligne[1]);
                $ligne[10] = strtoupper($ligne[10]);
                $ligne[9] = strtoupper($ligne[9]);
                /* $resultSearchauteur[1] = strtoupper($resultSearchauteur[1]);
                $resultSearchauteur[2] = strtoupper($resultSearchauteur[2]); */

                $requete = "SELECT left(desc_livre,500) FROM livre where ID_livre='$ligne[0]'";
                $recuplivre = requete($requete);
                $resultat = $recuplivre->fetch();

                afficheLivre($ligne,$resultat);
            }
            $resultSearchlivretitre->closeCursor();

        } elseif ($countlivregenre != 0) {
            while ($ligne = $resultSearchlivregenre->fetch()) {
                echo "" . $ligne["titre_livre"]  . "<br>";
                echo "$ligne[0]";

                $phrase  = $ligne[1];
                $original = array("é", "à", "ê", "ë", "ï", "î");
                $nouveau   = array("e", "a", "e", "e", "i", "i");
                $ligne[1] = str_replace($original, $nouveau, $phrase);

                $ligne[1] = strtoupper($ligne[1]);
                $ligne[10] = strtoupper($ligne[10]);
                $ligne[9] = strtoupper($ligne[9]);
                /* $resultSearchauteur[1] = strtoupper($resultSearchauteur[1]);
                $resultSearchauteur[2] = strtoupper($resultSearchauteur[2]); */

                $requete = "SELECT left(desc_livre,500) FROM livre where ID_livre='$ligne[0]'";
                $recuplivre = requete($requete);
                $resultat = $recuplivre->fetch();

                afficheLivre($ligne,$resultat);
            }
            $resultSearchlivregenre->closeCursor();
        } else if ($countauteurnom != 0) {
            while ($ligne = $resultSearchauteurnom->fetch()) {

                $phrase  = $ligne[1];
                $original = array("é", "à", "ê", "ë", "ï", "î");
                $nouveau   = array("e", "a", "e", "e", "i", "i");
                $ligne[1] = str_replace($original, $nouveau, $phrase);

                $ligne[1] = strtoupper($ligne[1]);
                $ligne[10] = strtoupper($ligne[10]);
                $ligne[9] = strtoupper($ligne[9]);
                /* $resultSearchauteur[1] = strtoupper($resultSearchauteur[1]);
                $resultSearchauteur[2] = strtoupper($resultSearchauteur[2]); */

                $requete = "SELECT left(desc_livre,500) FROM livre where ID_livre='$ligne[0]'";
                $recuplivre = requete($requete);
                $resultat = $recuplivre->fetch();


                afficheLivre($ligne, $resultat);
            }
            $resultSearchauteurnom->closeCursor();
        } elseif ($countauteurprenom != 0) {
            while ($ligne = $resultSearchauteurprenom->fetch()) {

                $phrase  = $ligne[1];
                $original = array("é", "à", "ê", "ë", "ï", "î");
                $nouveau   = array("e", "a", "e", "e", "i", "i");
                $ligne[1] = str_replace($original, $nouveau, $phrase);

                $ligne[1] = strtoupper($ligne[1]);
                $ligne[10] = strtoupper($ligne[10]);
                $ligne[9] = strtoupper($ligne[9]);
                /* $resultSearchauteur[1] = strtoupper($resultSearchauteur[1]);
                $resultSearchauteur[2] = strtoupper($resultSearchauteur[2]); */

                $requete = "SELECT left(desc_livre,500) FROM livre where ID_livre='$ligne[0]'";
                $recuplivre = requete($requete);
                $resultat = $recuplivre->fetch();


                afficheLivre($ligne, $resultat);
            }
            $resultSearchauteurprenom->closeCursor();
        } elseif ($countediteur != 0) {
            while ($ligne = $resultSearchediteur->fetch()) {

                echo "" . $ligne["Nom_editeur"]  . "<br>";
            }
            $resultSearchediteur->closeCursor();
        }  else {
            echo "pas dans la base de données";
        }
    ?>
    </div>
</body>
</html>













