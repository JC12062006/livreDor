<div>
    <h1>Page Accueil</h1>

    <?php
        if (isset($_SESSION['user'])){

    ?>  <h1>Bienvenue vous êtes connecté
            <?php echo $_SESSION['user']['Email'];?>
        </h1> 

        <h2>Nom: <?php echo $_SESSION['user'] ['Nom']; ?></h2>
        <h2>Prenom: <?php echo $_SESSION['user'] ['Prenom']; ?></h2>

        
    <?php
        }
    ?>
        
</div>