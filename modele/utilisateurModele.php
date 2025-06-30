<?php

class utilisateur
{
    function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    public function ajouterUtilisateur($nom, $prenom, $email, $mdp)
    {
        $hashPassword = sha1($mdp);
        $req = $this->bdd->prepare("INSERT INTO utilisateurs (Nom, Prenom, Email, Mdp) 
            VALUES (:nom, :prenom, :email, :mdp)");
        $req->bindParam(':nom', $nom);
        $req->bindParam(':prenom', $prenom);
        $req->bindParam(':email', $email);
        $req->bindParam(':mdp', $hashPassword);

        return $req->execute();
    }

    public function checkLogin($email, $password)
    {
        $hashMdp = sha1($password);
        $req = $this->bdd->prepare("SELECT * FROM utilisateurs WHERE Email = :email AND Mdp = :mdp");
        $req->bindParam(':email', $email);
        $req->bindParam(':mdp', $hashMdp);

        $req->execute();

        return $req->fetch();
    }

    function listeUser() 
    {
        $req = $this->bdd->prepare("SELECT * FROM utilisateurs");
    
        $req->execute();
    
        return $req->fetchall();
    }
}