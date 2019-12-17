<!DOCTYPE html>
<html>
<head>

    <title>Maison du Livre Antibes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">

    <!-- css icone search -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="Images/logo_livre.png" />

</head>

<body>

<?php
    include "config.php";
    include "header.php";
?>

<div class="all-container c1">
    <div>

        <!-- Début barre de recherche -->
        <div class="form-block">
            <div></div>
                <form class="form-search" action="recherche.php" method="POST">
                    <input type="text" placeholder="Votre recherche..." name="search">
                    <button type="submit"><i class="fa fa-search hsearch"></i></button>
                </form>
            <div></div>
        </div>
        <!-- Fin barre de recherche -->

        <div class="trait-container">
            <div>
                <h2 class="title-h2">Nouveautés</h2>
            </div>
            <div class="block-container">
                <div class="container">
                    <a href="#">
                    <img class="bg-img" src="Images/la-cite.jpg" alt="">
                    <img class="img-book" src="Images/la-cite.jpg" alt="">
                    <div class="text-container">
                        <h3><strong>La Cité A La Fin Des Temps</strong></h3>
                        <h3><strong>GREG BEAR</strong></h3>
                        <h4>Ginny et Jack ont des visions d’une cité fabuleuse, assiégée par un ennemi implacable ...</h4>
                        <h5>17 juillet 2008</h5>
                    </div>
                    </a>
                </div>
                <div class="container">
                    <img class="bg-img" src="Images/les-merveillles.jpeg" alt="">
                    <a href="#"><img class="img-book" src="Images/les-merveillles.jpeg" alt=""></a>
                    <div class="text-container">
                        <h3><strong>Nom</strong></h3>
                        <h3><strong>Auteur</strong></h3>
                        <h4>Description</h4>
                        <h5>Date</h5>
                    </div>
                </div>
                <div class="container">
                    <img class="bg-img" src="Images/Harry-potter.jpg" alt="">
                    <a href="#"><img class="img-book" src="Images/Harry-potter.jpg" alt=""></a>
                    <div class="text-container">
                        <h3><strong>Nom</strong></h3>
                        <h3><strong>Auteur</strong></h3>
                        <h4>Description</h4>
                        <h5>Date</h5>
                    </div>
                </div>
                <div class="container">
                    <img class="bg-img" src="Images/percy-jackson.jpg" alt="">
                    <a href="#"><img class="img-book" src="Images/percy-jackson.jpg" alt=""></a>
                    <div class="text-container">
                        <h3><strong>Nom</strong></h3>
                        <h3><strong>Auteur</strong></h3>
                        <h4>Description</h4>
                        <h5>Date</h5>
                    </div>
                </div>
                <div class="container">
                    <img class="bg-img" src="Images/la_peau_de_lours.jpg" alt="">
                    <a href="#"><img class="img-book" src="Images/la_peau_de_lours.jpg" alt=""></a>
                    <div class="text-container">
                        <h3><strong>Nom</strong></h3>
                        <h3><strong>Auteur</strong></h3>
                        <h4>Description</h4>
                        <h5>Date</h5>
                    </div>
                </div>
                <div class="container">
                    <img class="bg-img" src="Images/la_peau_de_lours.jpg" alt="">
                    <a href="#"><img class="img-book" src="Images/la_peau_de_lours.jpg" alt=""></a>
                    <div class="text-container">
                        <h3><strong>Nom</strong></h3>
                        <h3><strong>Auteur</strong></h3>
                        <h4>Description</h4>
                        <h5>Date</h5>
                    </div>
                </div>
                <div class="container">
                    <img class="bg-img" src="Images/la_peau_de_lours.jpg" alt="">
                    <a href="#"><img class="img-book" src="Images/la_peau_de_lours.jpg" alt=""></a>
                    <div class="text-container">
                        <h3><strong>Nom</strong></h3>
                        <h3><strong>Auteur</strong></h3>
                        <h4>Description</h4>
                        <h5>Date</h5>
                    </div>
                </div>
                <div class="container">
                    <img class="bg-img" src="Images/la_peau_de_lours.jpg" alt="">
                    <a href="#"><img class="img-book" src="Images/la_peau_de_lours.jpg" alt=""></a>
                    <div class="text-container">
                        <h3><strong>Nom</strong></h3>
                        <h3><strong>Auteur</strong></h3>
                        <h4>Description</h4>
                        <h5>Date</h5>
                    </div>
                </div>
            </div>
            <div>
                <a class="btn btn-vp" href="livre.php">Voir plus</a>
            </div>
        </div>
    </div>
</div>

<div id="degrade">
</div>

<div class="all-container c2">
    <div class="trait-container">
        <div class="block-container-h">
        <h2 class="title-h2">Coups de coeur</h2>
            <div class="block-container">
                <div class="container">
                    <a href="#">
                    <img class="bg-img" src="Images/la-cite.jpg" alt="">
                    <img class="img-book" src="Images/la-cite.jpg" alt="">
                    <div class="text-container">
                        <h3><strong>Nom</strong></h3>
                        <h3><strong>Auteur</strong></h3>
                        <h4>Description</h4>
                        <h5>Date</h5>
                    </div>
                    </a>
                </div>
                <div class="container">
                    <img class="bg-img" src="Images/les-merveillles.jpeg" alt="">
                    <a href="#"><img class="img-book" src="Images/les-merveillles.jpeg" alt=""></a>
                    <div class="text-container">
                        <h3><strong>Nom</strong></h3>
                        <h3><strong>Auteur</strong></h3>
                        <h4>Description</h4>
                        <h5>Date</h5>
                    </div>
                </div>
                <div class="container">
                    <img class="bg-img" src="Images/Harry-potter.jpg" alt="">
                    <a href="#"><img class="img-book" src="Images/Harry-potter.jpg" alt=""></a>
                    <div class="text-container">
                        <h3><strong>Nom</strong></h3>
                        <h3><strong>Auteur</strong></h3>
                        <h4>Description</h4>
                        <h5>Date</h5>
                    </div>
                </div>
                <div class="container">
                    <img class="bg-img" src="Images/percy-jackson.jpg" alt="">
                    <a href="#"><img class="img-book" src="Images/percy-jackson.jpg" alt=""></a>
                    <div class="text-container">
                        <h3><strong>Nom</strong></h3>
                        <h3><strong>Auteur</strong></h3>
                        <h4>Description</h4>
                        <h5>Date</h5>
                    </div>
                </div>
                <div class="container">
                    <img class="bg-img" src="Images/la_peau_de_lours.jpg" alt="">
                    <a href="#"><img class="img-book" src="Images/la_peau_de_lours.jpg" alt=""></a>
                    <div class="text-container">
                        <h3><strong>Nom</strong></h3>
                        <h3><strong>Auteur</strong></h3>
                        <h4>Description</h4>
                        <h5>Date</h5>
                    </div>
                </div>
                <div class="container">
                    <img class="bg-img" src="Images/la_peau_de_lours.jpg" alt="">
                    <a href="#"><img class="img-book" src="Images/la_peau_de_lours.jpg" alt=""></a>
                    <div class="text-container">
                        <h3><strong>Nom</strong></h3>
                        <h3><strong>Auteur</strong></h3>
                        <h4>Description</h4>
                        <h5>Date</h5>
                    </div>
                </div>
                <div class="container">
                    <img class="bg-img" src="Images/la_peau_de_lours.jpg" alt="">
                    <a href="#"><img class="img-book" src="Images/la_peau_de_lours.jpg" alt=""></a>
                    <div class="text-container">
                        <h3><strong>Nom</strong></h3>
                        <h3><strong>Auteur</strong></h3>
                        <h4>Description</h4>
                        <h5>Date</h5>
                    </div>
                </div>
                <div class="container">
                    <img class="bg-img" src="Images/la_peau_de_lours.jpg" alt="">
                    <a href="#"><img class="img-book" src="Images/la_peau_de_lours.jpg" alt=""></a>
                    <div class="text-container">
                        <h3><strong>Nom</strong></h3>
                        <h3><strong>Auteur</strong></h3>
                        <h4>Description</h4>
                        <h5>Date</h5>
                    </div>
                </div>
            </div>
            <a class="btn btn-vp" href="livre.php">Voir plus</a>
        </div>
    </div>
</div>

<?php include "footer.php" ?>


</body>

</html>
