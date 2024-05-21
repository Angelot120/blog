<?php

    if (!isset($_COOKIE['username'])){
        header('Location: /blog/pages/connection.php?connexion');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="../assets/summer_note/summernote-lite.css" rel="stylesheet">
    <title>Blog</title>
</head>
<body>
    <?php 
        require_once('../includes/menu.php');
    ?>

    <form action="../processing/bloging.php" method="POST" enctype="multipart/form-data">
        <label for="title"></label>
        <input type="text" name="title" id="title" require>
        
        <label for="short_description">Saisir brève description de votre article</label>
        <textarea type="text" name="short_description" id="short_description" placeholder="Saisir une brève descrption..." require></textarea>


        <label for="long_description">Saisir une plus longue description de l'article</label>
        <textarea  id="long_description" name="long_description" placeholder="Saisir une logue description de l'article..."  require></textarea>

        <label for="file">Joindre un fichier à votre article</label>
        <input type="file" name="file" id="file">

        <button type="submit">Soumettre</button>

        <button type="reset">annuler</button>

    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../assets/summer_note/summernote-lite.js"></script>
    <script>
        $(document).ready(function () {
            $('#long_description').summernote();
        });
    </script>

</body>
</html>