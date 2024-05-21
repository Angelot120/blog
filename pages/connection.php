<?php

    if(isset($_COOKIE["username"])){
        header("Location: /blog/index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assests/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <title>Connection</title>
</head>
<body>
    <?php 
        require_once("../includes/menu.php"); 
    ?>

    <?php
        if (isset($_GET["user"]) && $_GET["user"] == 'unknown') {

            echo'<h2 class="alert alert-danger">Nom d\'utilisateur ou mot de passe incorrect veuillez réésayer</h2>';
        }
    ?>

    <div class="login">

        <form action="/blog/processing/login.php" method="POST">

            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username" placeholder="Saisir le nom d'utilisateur ou le pseudnyme ici" minlength="5" maxlength="20" required>

            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Saisir votre mot de passe ici" minlength="8" maxlength="20" required>

            <button type="submit" class="btn btn-primary">Se connecter</button>

            <p>Pas encore de compte ? ? Inscrivez vous en cliquant 
                <a href="/blog/pages/inscription.php?inscription">
                    ici
                </a>
            </p>

        </form>
    </div>
</body>
</html>