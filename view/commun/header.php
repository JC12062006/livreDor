<!DOCTYPE html>

<html>
    <head>
        <title>Mon super projet de connexion</title>
    </head>
    <body>
        
    <a href="index.php?page=login">Login</a>
    <a href="index.php?page=inscription">Inscription</a>

    <?php if(isset($_SESSION['user'])){?>
    <a href="index.php?page=profil">Profil</a>
    <a href="index.php?page=listeUser">Liste utilisateur</a>
    <?php } ?>

    <a href="index.php?page=deconnexion">Deconnexion</a>
 
