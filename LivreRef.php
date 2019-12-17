<?php include "menu.php" 
?>
<html>
<head>
    <title>Titre livre référencé</title>
    <meta charset="UTF8" >
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="livreref">

        <figure>
            <img src="Images/la-cite.jpg"/>
            <figcaption>Couverture livre référencé</figcaption>
        </figure>
        <div>
            <h1>Livre référencé</h1>
                <p>Nom de catégorie du livre</p>
            <h2>Sysnopsis du livre</h2> 
                <p>Il était une fois...</p>
                <label>
                    <small>Ajouter aux favoris</small>
                    <input type="radio">
                </label>
                <p><a href="ListeFavori.html"  target="_blank"> Liste favori</a></p>
                <p>En stock</p>
                <p>Stock épuisé</p>
                <p><a href="Reservation.html"  target="_blank"> Réservation</a></p>
            <h2>Autres éditions (disponibles ou à paraître)</h2>
                <ul>
                    <li><a href="url_edi1">Format 1  Edition 1 Date de parution</a></li>
                    <li><a href="url_edi2">Format 2  Edition 2 Date de parution</a></li>
                    <li><a href="url_edi3">Format 3  Edition 3 Date de parution</a></li>
                </ul>
            <h2>Informations secondaires</h2>
                <ul>
                    <li>EAN : 9789865544</li>
                    <li>Disponibilité : disponible/non disponible</li>
                    <li>Nombre de pages : x pages</li>
                    <li>Longueur : x cm</li>
                    <li>largeur : x cm</li>
                    <li>épaisseur : x cm</li>
                    <li>Poids : x g</li>
                    <li>Distributeur : exemple</li>
                    <li>Rayon : exemple</li>        
                </ul>
            <h2>Biographie de l'auteur</h2>
                <p>Il s'appelle Jean, il est né en 1245.</p>
            <h3>Dernieres parution de l'auteur</h3>
        </div>
    </div>
    
</body>
</html>