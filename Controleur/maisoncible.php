<?php
include ('../Modele/Connexion.php');
session_start();
$req= $BDD->prepare("INSERT INTO maison(IdUtilisateur,Nom,Porte,Voie,Adresse,Code_Postal,Ville,Nombre_Piece,Nombre_Etage) VALUES(?,?,?,?,?,?,?,?,?)");
$req->execute(array($_SESSION['IdUtilisateur'],htmlspecialchars($_POST['nom']),intval($_POST['porte']), htmlspecialchars($_POST['voie']),htmlspecialchars($_POST['adresse']), intval($_POST['code_postal']),htmlspecialchars($_POST['ville']),intval($_POST['nombre_pieces']),intval($_POST['nombre_etages'])));

header('Location:../Vue/maison.php');

