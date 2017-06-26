<?php
session_start();
// Connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=chome2;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
///////
$reponse = $bdd->query('SELECT nom, prenom, mail, mdp, telephone, numero_abonne FROM utilisateur ORDER BY IdUtilisateur DESC LIMIT 1 ');
$donnees = $reponse->fetch();
if (isset($_POST['nom']) || isset($_POST['prenom']) || isset($_POST['mail']) || isset($_POST['mdp']) || isset($_POST['telephone']) || isset($_POST['numero_abonne'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $mdp = sha1($_POST['mdp']);



    $telephone = $_POST['telephone'];
    $numero_abonne = $_POST['numero_abonne'];
    $req = $bdd->exec("UPDATE utilisateur SET nom = '" . $nom . "' WHERE nom = '" . $donnees['nom'] . "'");
    $req = $bdd->exec("UPDATE utilisateur SET prenom = '" . $prenom . "' WHERE prenom = '" . $donnees['prenom'] . "'");
    $req = $bdd->exec("UPDATE utilisateur SET mail = '" . $mail . "' WHERE mail = '" . $donnees['mail'] . "'");
    $req = $bdd->exec("UPDATE utilisateur SET mdp = '" . $mdp . "' WHERE mdp = '" . $_SESSION['pass'] . "'");
    $req = $bdd->exec("UPDATE utilisateur SET telephone = '" . $telephone . "' WHERE telephone = '" . $donnees['telephone'] . "'");
    $req = $bdd->exec("UPDATE utilisateur SET numero_abonne = '" . $numero_abonne . "' WHERE numero_abonne = '" . $donnees['numero_abonne'] . "'");
}
header('Location:../Vue/ParametreAdmin.php');