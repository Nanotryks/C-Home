<?php

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

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO utilisateur (nom, prenom, mail, mdp, numero_abonne, telephone,Admin) VALUES(?, ?, ?, ?, ?, ?,?)');
$req->execute(array(htmlspecialchars($_POST['nom']),htmlspecialchars($_POST['prenom']),htmlspecialchars($_POST['email']), htmlspecialchars(sha1($_POST['pass'])),htmlspecialchars($_POST['user']),htmlspecialchars($_POST['telephone']),'0'));

echo "Inscription Réussie";
// Redirection du visiteur vers la page du index.php
//header('Location: ../vue/index.php');
?><br/>
<!--Cliquez <a href="index.php#contac">ici</a> pour retourner à la page d'accueil-->