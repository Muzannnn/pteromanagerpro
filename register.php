<?php 
require 'vendor/autoload.php';

include ("server/api/class/include.php");
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AniStream - Enregistrement</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/scroller.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="registration">
    <div class="registration-center">
        <a href="/"><img src="images/logo-anistream.svg" alt=""></a>
        <h1>Inscription</h1>
        <form id="form-register">
            <input id="pseudo" name="pseudo" type="text" placeholder="Pseudonyme" required>
            <input id="email" name="email" type="email" placeholder="EMail" required>
            <input id="password" name="password" type="password" placeholder="Mot de passe" required>
            <input id="passwordconfirm" name="passwordconfirm" type="password" placeholder="Répeter le mot de passe" required>
            <div class="checkbox">
                <input id="checkbox" type="checkbox" required>&nbsp;J'accepte les&nbsp;<a href="/cgu">Conditions générales d'utilisations</a>
            </div>
            <button type="submit">Créer un compte</button>
        </form>
        <p>Vous possédez déjà un compte ? <a href="/login">Se connecter</a></p>
        <footer>2021 - 2024 Anistream Inc.</footer>
    </div>

    <script src="/server/api/js/register.js"></script>
</body>
</html>