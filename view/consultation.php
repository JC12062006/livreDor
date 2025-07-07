<?php
require_once(__DIR__ . '/../modele/signatureModele.php');
$signatures = recupererSignatures();
?>
<main class="consultation">
    <h2>📋 Consultation des Signatures</h2>

    <?php foreach ($signatures as $sig): ?>
        <div class="message">
            <p><strong><?= htmlspecialchars($sig["Nom_Auteur"] ?? "", ENT_QUOTES, 'UTF-8') ?> 
                (<?= htmlspecialchars($sig["Sexe"] ?? "", ENT_QUOTES, 'UTF-8') ?>)</strong></p>
            <p><em>Email :</em> <?= htmlspecialchars($sig["Email"] ?? "", ENT_QUOTES, 'UTF-8') ?></p>
            <p><em>Téléphone :</em> <?= htmlspecialchars($sig["Telephone"] ?? "Non fourni", ENT_QUOTES, 'UTF-8') ?></p>
            <p><em>Message :</em> <?= nl2br(htmlspecialchars($sig["Message"] ?? "", ENT_QUOTES, 'UTF-8')) ?></p>
            <p><em>Date :</em> <?= date("d/m/Y à H:i", strtotime($sig["Date_Signature"])) ?></p>
        </div>
    <?php endforeach; ?>
</main>
