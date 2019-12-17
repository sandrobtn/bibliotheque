<?php
    include "helper.php";
    include "menu.php";
?>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>

    <div class="container-livre">
        <?php
            /* $requete = "SELECT *,left(desc_livre,500) FROM livre,auteur where ID_livre=1 and livre.ID_auteur=auteur.ID_auteur";
            $recuplivre = requete($requete);
            $resultat = $recuplivre->fetch();
            $phrase  = $resultat[1];
            $original = array("é", "à", "ê", "ë", "ï", "î");
            $nouveau   = array("e", "a", "e", "e", "i", "i");
            $resultat[1] = str_replace($original, $nouveau, $phrase);

            $titre_livre = strtoupper($resultat[1]);
            $prenom = strtoupper($resultat[10]);
            $nom = strtoupper($resultat[9]); */

            $resultat = recupLivre(1);

        ?>
        <div class="container cl">
            <div class="slideshow">
                <a href="livreref.php">
                    <img class="bg-img" src="<?php echo $resultat[5] ?>">
                    <ul id="siContent2">
                        <h3 id="si2"><strong><?php echo $resultat[1];?></strong></h3>
                        <h3 id="si3"><strong><?php echo "$resultat[10] $resultat[9]";?></strong></h3>
                        <img class="img-book" id="si4" src="<?php echo $resultat[5] ?>">
                    </ul>
                    <ul id="sContent2">
                        <div class="text-container2">
                            <h3><strong><?php echo $resultat[1];?></strong></h3>
                            <h3><strong><?php echo "$resultat[10] $resultat[9]";?></strong></h3>
                            <h4><?php echo "$resultat[11]..."; ?></h4>
                        </div>
                    </ul>
                </a>
            </div>
        </div>
        <?php
            $resultat = recupLivre(2);
        ?>
        <div class="container cl">
            <div class="slideshow">
                <a href="#">
                    <img class="bg-img" src="<?php echo $resultat[5] ?>">
                    <ul id="siContent2">
                        <h3 id="si2"><strong><?php echo $resultat[1];?></strong></h3>
                        <h3 id="si3"><strong><?php echo "$resultat[10] $resultat[9]";?></strong></h3>
                        <img class="img-book" id="si4" src="<?php echo $resultat[5] ?>">
                    </ul>
                    <ul id="sContent2">
                        <div class="text-container2">
                            <h3><strong><?php echo $resultat[1];?></strong></h3>
                            <h3><strong><?php echo "$resultat[10] $resultat[9]";?></strong></h3>
                            <h4><?php echo "$resultat[11]..."; ?></h4>
                        </div>
                    </ul>
                </a>
            </div>
        </div>
    </div>

</body>
</html>
