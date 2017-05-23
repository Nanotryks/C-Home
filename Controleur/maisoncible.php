<?php
// Connexion à la base de données

   $host_name  = "localhost";
    $database   = "chome2";
    $user_name  = "root";
    $password   = "";

// Connexion à la base de données
try
{
    $dbn = 'mysql:dbname=chome2;host=127.0.0.1';
	$bdd = new PDO($dbn, $user_name,  $password );

}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req= $bdd->prepare("INSERT INTO maison(Nom,Porte,Voie,Adresse,Code_Postal,Ville,Nombre_Piece,Nombre_Etage) VALUES(?,?,?,?,?,?,?,?)");
$req->execute(array(htmlspecialchars($_POST['nom']),intval($_POST['porte']), htmlspecialchars($_POST['voie']),htmlspecialchars($_POST['adresse']), intval($_POST['code_postal']),htmlspecialchars($_POST['ville']),intval($_POST['nombre_pieces']),intval($_POST['nombre_etages'])));

header('Location:../Vue/maison.php');

