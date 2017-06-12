<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 10/06/2017
 * Time: 18:39
 */
include '../Modele/Connexion.php';

if(isset($_POST['reponse']))
{
    $rep=sha1($_POST['reponse']);
}
else
{
    header('Location:../Vue/MotDePasseOublie.html');
}

$mail=$_POST['mail'];
$mdp=sha1($_POST['new']);
$conf=sha1($_POST['conf']);
$rep2=0;

$reponse=$BDD->query('SELECT ReponseSecrete FROM utilisateur WHERE mail="'.$mail.'"');
while($donnees=$reponse->fetch())
{
    $rep2=$donnees['ReponseSecrete'];

    if($rep2==$rep && $mdp==$conf)
    {
        echo 'reussi';
        $BDD->query('UPDATE utilisateur SET mdp="'.$mdp.'" WHERE mail="'.$mail.'"');
        header('Location:../Vue/index.php');
    }
    else
    {
        header('Location:../Vue/MotDePasseOublie.html');
    }
}

