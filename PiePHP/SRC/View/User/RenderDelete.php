<?php
    session_start();
    if ($_SESSION['id']) { 
?>

<center>
    <h1>Compte supprimer</h1>
    <button onclick="window.location='./Delete'">🗑️ Supprimer Compte ? 🗑️</button>
</center>

<?php 
    } 
?>