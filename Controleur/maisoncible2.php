<?php
// Connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=chome2;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());

}
$reponse = $bdd->query('SELECT IdMaison FROM maison WHERE Porte = "' . $_POST['test'] . '"');
$id = 0;
while ($donnees = $reponse->fetch()) {
    $Id = $donnees['IdMaison'];
}

$reponse2 = $bdd->query('SELECT IdPiece FROM piece WHERE IdMaison = "' . $Id . '"');
$Id2 = 0;
while ($donnees2 = $reponse2->fetch()) {
    $Id2 = $donnees2['IdPiece'];
    $req1 = $bdd->exec("DELETE FROM capteur WHERE IdPiece = '" . $Id2 . "'");
}


$req1 = $bdd->exec("DELETE FROM piece WHERE IdMaison = '" . $Id . "'");
$req = $bdd->exec("DELETE FROM maison WHERE Porte = '" . intval($_POST['test']) . "'");

header('Location:../Vue/maison_supprimer.php');