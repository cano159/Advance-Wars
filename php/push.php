<?php
include('config.php');
// utiliser requetes pr�par�es � l'avenir
//$bdd->exec("UPDATE aw_parties SET json = '".$bdd->quote($_POST["json"])."' WHERE id = 0");

$bdd->exec("UPDATE parties SET json = '".$_POST["json"]."' WHERE id = 0");

?>