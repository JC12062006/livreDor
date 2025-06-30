    <?php
        if (isset($_SESSION['user'])){

    ?>  <h1>Page profil
            <?php echo $_SESSION['user']['Email'];?>
        </h1> 

        <h2>Nom: <?php echo $_SESSION['user'] ['Nom']; ?></h2>
        <h2>Prenom: <?php echo $_SESSION['user'] ['Prenom']; ?></h2>
        <h2>Email: <?php echo $_SESSION['user'] ['Email']; ?></h2>

        
    <?php
        }
    ?>