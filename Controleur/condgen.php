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
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée

 if (isset($_POST['cond'])){
     $text=htmlspecialchars($_POST['cond']);
 $req = $bdd->prepare('INSERT INTO conditions_d_utilisation (text) VALUES(?)');
 $req = $bdd->exec("UPDATE conditions_d_utilisation SET text = '" . $text . "' WHERE id = 1");
}
header("Location: ../Vue/Admin.php");