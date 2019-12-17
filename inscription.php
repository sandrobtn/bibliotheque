<!DOCTYPE html>
<html>
<head>

    <title>Maison du Livre à Antibes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">

    <!-- css icone search -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="Images/logo_livre.png" />

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">

</head>

<body>

<?php
    include "config.php";
    include "header.php";
?>

<div class="grid-inscrip">
    <div></div>
        <div class="testbox">
          <h1 class="title-inscrip">Inscription</h1>

          <form class="form-inscript" action="validation.php">
              <hr>
            <div class="accounttype">
              <input type="radio" value="None" id="radioOne" name="account" checked/>
              <label for="radioOne" class="radio" chec>Perso</label>
              <input type="radio" value="None" id="radioTwo" name="account" />
              <label for="radioTwo" class="radio">Entreprise</label>
            </div>
          <hr>
          <label id="icon" for="name"><i class="icon-envelope "></i></label>
          <input class="insc" type="text" name="name" id="name" placeholder="Email" required/>
          <label id="icon" for="name"><i class="icon-user"></i></label>
          <input class="insc" type="text" name="name" id="name" placeholder="Name" required/>
          <label id="icon" for="name"><i class="icon-shield"></i></label>
          <input class="insc" type="password" name="name" id="name" placeholder="Password" required/>
          <div class="gender">
            <input type="radio" value="None" id="male" name="gender" checked/>
            <label for="male" class="radio" chec>Homme</label>
            <input type="radio" value="None" id="female" name="gender" />
            <label for="female" class="radio">Femme</label>
           </div>

           <a href="#" class="button-inscrip">S'incrire</a>
          </form>
        </div>
    <div></div>
</div>

<?php include "footer.php" ?>

</body>
</html>
