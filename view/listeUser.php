<?php include ('controller/selectUser.php')?>
<html>
    <head>
        
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($utilisateurs as $utilisateur) {?>
                        <tr>
                            <td><?php echo $utilisateur['Nom'];?></td>
                            <td><?php echo $utilisateur['Prenom']; ?></td>
                            <td><?php echo $utilisateur['Email']; ?></td>
                        </tr> 
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>