<?php
// Connexion à la base de données
include ('../Modele/Connexion.php');

session_start();

$reponse = $BDD->query('SELECT IdMaison FROM maison WHERE Porte = "' . $_POST['test'] . '" and IdUtilisateur="'.$_SESSION['IdUtilisateur'].'"');
$id = 0;
while ($donnees = $reponse->fetch()) {
    $Id = $donnees['IdMaison'];
}

$reponse2 = $BDD->query('SELECT IdPiece FROM piece WHERE IdMaison = "' . $Id . '"');
$Id2 = 0;
while ($donnees2 = $reponse2->fetch()) {
    $Id2 = $donnees2['IdPiece'];
    $reponse=$BDD->query('SELECT IdCapteur FROM capteur WHERE IdPiece="'.$Id2.'"');
    while($donnees=$reponse->fetch())
    {
        $BDD->query('DELETE FROM mode WHERE IdCapteur="'.$donnees['IdCapteur'].'"');
    }
    $req1 = $BDD->exec("DELETE FROM capteur WHERE IdPiece = '" . $Id2 . "'");
}


$req1 = $BDD->exec("DELETE FROM piece WHERE IdMaison = '" . $Id . "'");
$req1 = $BDD->exec("DELETE FROM donnees WHERE IdUtilisateur='".$_SESSION['IdUtilisateur']."'");
$req = $BDD->exec("DELETE FROM maison WHERE Porte = '" . intval($_POST['test']) . "' AND IdUtilisateur='".$_SESSION['IdUtilisateur']."'");

header('Location:../Vue/maison_supprimer.php');