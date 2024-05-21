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
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Inscription</title>
</head>
<body>
    <?php 
        require_once("../includes/menu.php"); 
    ?>

    <div class="signin">

        <?php if (isset($_GET["email"]) && $_GET['email'] == 'error') {
            echo '<h2 class="alert alert-danger">Email invalide. Veuillez saisir entre 5 et 50 caractères.</h2>';
        }
        
        if (isset($_GET["confirmation"]) && $_GET['confirmation'] == 'error') {
            echo '<h2 class="alert alert-danger">Le mot de passe de confirmation est différent du mot de passe que vous avez rentré.</h2>';
        }
        ?>

        <form action="/blog/processing/authentication.php" method="POST">
            <label for="email">Adresse Email</label>
            <input type="email" name="email" id="email" placeholder="Saisir votre adresse email" required>

            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username" placeholder="Saisir le nom d'utilisateur ou le pseudnyme ici" minlength="5" maxlength="20" required>

            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Saisir votre mot de passe ici" minlength="8" maxlength="20" required>

            <label for="confirmation">Confirmation de mot de passe</label>
            <input type="password" name="confirmation" id="confirmation" placeholder="Confirmez votre mot de passe ici" minlength="8" maxlength="20" required>
            <button type="submit" class="btn btn-primary">S'inscrire</button>

            <p>Pas encore de compte ? connectez vous en cliquant 
                <a href="/blog/pages/connection.php?connexion">
                    ici
                </a>
            </p>
        </form>
    </div>
</body>
</html>