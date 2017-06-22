
<?php
session_start();
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

 if (isset($_POST['message'])){
     $message=htmlspecialchars($_POST['message']);
 $req = $bdd->prepare('INSERT INTO message (nom, message, contact) VALUES(?, ?, ?)');
 $req->execute(array($_SESSION['nom'],$message,$_SESSION['telephone']));
}
 header("Location: ../Vue/sertech.php");