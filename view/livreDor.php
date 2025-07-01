<?php
require_once("../modele/signatureModele.php");
$signatures = recupererSignatures();
include("commun/header.php");
?>

<h2>Livre d'Or</h2>

<?php if (isset($_SESSION["id"])): ?>
<form method="POST" action="../controller/livreDorController.php">
    <textarea name="message" placeholder="Votre message..." required></textarea><br>
    <button type="submit">Signer</button>
</form>
<?php else: ?>
<p>Vous devez être connecté pour signer le livre d'or.</p>
<?php endif; ?>

<h3>Messages :</h3>
<?php foreach ($signatures as $sig): ?>
    <p><strong><?= htmlspecialchars($sig["Prenom"]) ?> <?= htmlspecialchars($sig["Nom"]) ?>:</strong> <?= htmlspecialchars($sig["Message"]) ?> <em>(<?= $sig["Date_Signature"] ?>)</em></p>
<?php endforeach; ?>

<?php include("commun/footer.php"); ?>
