<?php
include "../Modele/Connexion.php";
session_start();

if (isset($_POST["choix"])) {
    $choix = $_POST['choix'];
} else {
    $choix = 0;
}

if ($choix=="supprimer"){
    $reponse = $BDD->query('SELECT IdMaison FROM maison WHERE IdUtilisateur="'.$_POST['search'].'"');
    $BDD->exec("DELETE FROM mode WHERE IdUtilisateur='".$_POST['search']."'");
    $Id = 0;
    while ($donnees = $reponse->fetch()) {
        $Id = $donnees['IdMaison'];


        $reponse2 = $BDD->query('SELECT IdPiece FROM piece WHERE IdMaison = "' . $Id . '"');
        while ($donnees2 = $reponse2->fetch()) {
            $Id2 = $donnees2['IdPiece'];
            $req1 = $BDD->exec("DELETE FROM capteur WHERE IdPiece = '" . $Id2 . "'");
        }


        $req1 = $BDD->exec("DELETE FROM piece WHERE IdMaison = '" . $Id . "'");
    }
    $req = $BDD->exec('DELETE FROM maison WHERE IdUtilisateur="'.$_POST['search'].'"');
    $BDD -> exec('DELETE FROM donnees WHERE IdUtilisateur="'.$_POST['search'].'"');
    $req2 = $BDD->exec('DELETE FROM utilisateur WHERE IdUtilisateur="'.$_POST['search'].'"');


    header('location:../Vue/Admin.php');
}

if ($choix=="donner"){
    if(isset($_POST["search"])) {
        $id = $_POST["search"];
        $reponse = $BDD->exec('UPDATE utilisateur SET Admin = 1 WHERE IdUtilisateur="' . $id . '"');
    }
    header('location:../Vue/Admin.php');
}

if ($choix=="retirer"){
    if(isset($_POST["search"])) {
        $id = $_POST["search"];
        $reponse = $BDD->exec('UPDATE utilisateur SET Admin = 0 WHERE IdUtilisateur="' . $id . '"');
    }
    header('location:../Vue/Admin.php');
}
