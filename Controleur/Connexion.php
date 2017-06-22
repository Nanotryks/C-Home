<?php

   $host_name  = "localhost";
    $database   = "chome2";
    $user_name  = "root";
    $password   = "";

// Connexion à la base de données
try
{
    $dsn = 'mysql:dbname=chome2;host=127.0.0.1';
	$bdd = new PDO($dsn, $user_name,  $password );
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée

$req = $bdd->prepare("SELECT * FROM utilisateur WHERE numero_abonne=? AND mdp=? ");


$req->execute(array(htmlspecialchars($_POST['user']),htmlspecialchars(sha1($_POST['pass']))));
//$ret = $db->insecureQuery("SELECT * FROM table_test WHERE t1=".$db->quote($t1));
$resultat = $req->fetch();
$rows = $req->rowCount();
// si le mot de passe et l'identifiant ne correspondent pas
if ($rows <=0)
{
    header("Location: ../Vue/EchecConnexion.php");
}
else
    // sinon, on démarre la séssion
{
    session_start();
    $_SESSION['IdUtilisateur']=$resultat['IdUtilisateur'];
    $_SESSION['telephone'] = $resultat['telephone'];
    $_SESSION['pass'] = $resultat['mdp'];
     $_SESSION['prenom'] = $resultat['prenom'];
    $_SESSION['nom'] = $resultat['nom'];
    $_SESSION['user'] = $resultat['numero_abonne'];
    //echo 'Bienvenue'." ".$_SESSION['prenom']." ". $_SESSION['nom'];
    if($resultat['Admin']==1)
    {
        header ('location: ../Vue/Admin.php');
    }
    else
    {
        header ('location: ../Vue/C_Home.php');
    }

}

?><br/>

