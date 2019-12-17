<?php
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
<h1>Inscription</h1>

    <form action="valinsertion.php" method="POST">
        <!-- titre livre-->
        <div class="groupe-cases"> 
            <div class="case">
                <input id="titre_livre" name="titre_livre" type="text" placeholder="titre du livre" class="form-control input-md" required="">
            </div>
        </div>
        <!-- Prénom-->
        <div class="groupe-cases"> 
            <div class="case">
                <input id="prenom_auteur" name="prenom_auteur" type="text" placeholder="Prénom auteur" class="form-control input-md" required="">
            </div>
        </div>
        <!-- date edition-->
        <div class="groupe-cases"> 
            <div class="case">
                <input id="date_edition_livre" name="date_edition_livre" type="text" placeholder="d'ate d'edition du livre" class="form-control input-md" required="">
            </div>
        </div>
        <!-- chemin img-->
        <div class="groupe-cases"> 
            <div class="case">
                <input id="chemin_img" name="chemin_img" type="text" placeholder="chemin de l'image" class="form-control input-md" required="">
            </div>
        </div>
        <!-- description livre-->
        <div class="groupe-cases"> 
            <div class="case">
                <input id="desc_livre" name="desc_livre" type="text" placeholder="résumé" class="form-control input-md" required="">
            </div>
        </div>
        <!--Nom-->
        <div class="groupe-cases"> 
            <div class="case">
                <input id="nom_auteur" name="nom_auteur" type="text" placeholder="Nom auteur" class="form-control input-md" required="">
            </div>
        </div>
        <!-- Date de naissance -->
        <div class="groupe-cases">
            <div class="case">
                <label for="start">Date de naissance</label>
                <input type="date" id="date_naissance_auteur" name="date_naissance_auteur" min="1000-01-01" max="2019-12-31" required="" />
            </div>
        </div>

        <!-- Bouton Connexion -->
        <div class="groupe-cases">
            <button><input type="submit">insertion</button>
        </div>
    </form>
</body>
</html>