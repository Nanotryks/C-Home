<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 26/05/2017
 * Time: 10:49
 */
include "../Modele/Connexion.php";

session_start();
$reponse = $BDD->query('SELECT IdMaison FROM maison WHERE IdUtilisateur="'.$_SESSION['IdUtilisateur'].'"');
$id = 0;
while ($donnees = $reponse->fetch()) {
    $Id = $donnees['IdMaison'];
}

$reponse2 = $BDD->query('SELECT IdPiece FROM piece WHERE IdMaison = "' . $Id . '"');
$Id2 = 0;
while ($donnees2 = $reponse2->fetch()) {
    $Id2 = $donnees2['IdPiece'];
    $req1 = $BDD->exec("DELETE FROM capteur WHERE IdPiece = '" . $Id2 . "'");
}


$req1 = $BDD->exec("DELETE FROM piece WHERE IdMaison = '" . $Id . "'");
$req = $BDD->exec("DELETE FROM maison WHERE Porte = '" . intval($_POST['test']) . "'");
