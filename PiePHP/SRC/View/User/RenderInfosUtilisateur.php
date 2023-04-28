<?php
    session_start();
    if ($_SESSION['id']) {
?>

<center>
    <h2>Infos de l'Utilisateur :</h2>
    <?php $this->voirInfosUtilisateur(); ?>
</center>

<?php
    }
?>