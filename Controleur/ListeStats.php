<?php
include '../Modele/Connexion.php';

$getid = $BDD->query('SELECT IdMaison, Nom FROM maison WHERE IdUtilisateur="' . $_SESSION['IdUtilisateur'] . '"');
$getdonnee= $BDD->query('SELECT Type, Valeur, date, time FROM donnees WHERE IdUtilisateur = "' . $_SESSION['IdUtilisateur'] . '" ORDER by date ');
while ($donnees = $getdonnee->fetch()) {
    echo  '</br>'.  " " . $donnees['date']. " " . $donnees['time']. " : " . $donnees['Valeur'];
}