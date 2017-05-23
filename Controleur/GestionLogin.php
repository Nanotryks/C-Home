<?php

$pseudo=$_POST["login"];

$mdp = $_POST["password"];

include "../Modele/Connexion.php";
$reponse = $BDD->query('SELECT mdp FROM compte WHERE pseudo="'.$pseudo.'"');
$donnees = $reponse->fetch();
if($donnees!=null)
    {
     if ($donnees['mdp']==$mdp)
        {
            header('Location: ../Vue/C_Home.php');
        }
     else
        {
            header('Location: ../Vue/InscriptionsIncorrecte.php');
        }
    }
else
    {
        header('Location: ../Vue/InscriptionsIncorrecte.php');
    }

