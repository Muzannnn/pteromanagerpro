<?php 
require 'vendor/autoload.php';

include ("server/api/class/include.php");
 ?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AniStream - Identification</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="assets/js/scroller.js"></script>
</head>
<body class="registration">
    <div class="registration-center">
        <a href="/"><img src="images/logo-anistream.svg" alt=""></a>
        <h1>Identification</h1>
        <form action="">
            <input type="mail" placeholder="EMail">
            <input type="password" placeholder="Mot de passe">
            <button type="submit">Se connecter</button>
        </form>
        <p>Vous ne possédez pas encore de compte ? <a href="/register">S'enregistrer</a></p>
        <p><a href="/lost-password">Mot de passe oublié?</a></p>
        <footer>2021 - 2024 Anistream Inc.</footer>
    </div>
</body>
</html>