<?php
require_once("../bdd/bdd.php");

function ajouterSignature($idUtilisateur, $message) {
    global $connexion;
    $sql = "INSERT INTO Signatures (Message, ID_Utilisateur) VALUES (?, ?)";
    $stmt = $connexion->prepare($sql);
    $stmt->execute([$message, $idUtilisateur]);
}

function recupererSignatures() {
    global $connexion;
    $sql = "SELECT s.Message, s.Date_Signature, u.Prenom, u.Nom FROM Signatures s
            JOIN Utilisateurs u ON s.ID_Utilisateur = u.ID_Utilisateur
            ORDER BY s.Date_Signature DESC";
    $stmt = $connexion->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
