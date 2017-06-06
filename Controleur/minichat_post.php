<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=chome2;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO minichat (message) VALUES(?)');
$req->execute(array($_POST['message']));

// Redirection du visiteur vers la page du minichat

header('../Vue/sertech.php');
exit();