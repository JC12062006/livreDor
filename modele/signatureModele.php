<?php
// Connexion à la base de données
require_once(__DIR__ . '/../bdd/bdd.php');

/**
 * Récupère toutes les signatures du livre d'or.
 *
 * @return array Tableau associatif contenant les messages triés par date.
 */
function recupererSignatures() {
    global $bdd;

    $sql = "SELECT Nom_Auteur, Sexe, Email, Telephone, Message, Date_Signature 
            FROM Signatures 
            ORDER BY Date_Signature DESC";
    $resultat = $bdd->query($sql);
    
    return $resultat->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Ajoute une nouvelle signature dans la base de données.
 *
 * @param string $nom_auteur Le nom de la personne qui signe.
 * @param string $message Le contenu du message.
 */
function ajouterSignature($nom_auteur, $message) {
    global $bdd;

    $sql = "INSERT INTO Signatures (Nom_Auteur, Message) 
            VALUES (:nom, :message)";
    
    $stmt = $bdd->prepare($sql);
    $stmt->execute([
        ':nom'     => $nom_auteur,
        ':message' => $message
    ]);
}
?>
