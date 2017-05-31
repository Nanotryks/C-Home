<?php
include '../Controleur/start_session.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../CSS/Maison.css"/>
    <link rel="stylesheet" href="../CSS/design_global.css" />
    <link rel="stylesheet" href="../CSS/bouton_remonter.css" />
    <link rel="icon" href="../Image/Logopic.ico">
    <title>Suppression d'une maison</title>

    <script type="text/javascript" src="../Js/scroll.js"></script>
</head>

<body>
<!--<img src="Image\Logop.png" alt="Logo de C-Home" class="logo"/>-->
<header id="haut">
    <a class="retour" href="javascript:history.go(-1)">⇦</a>
    <a class="avancer" href="javascript:history.go(+1)">⇨</a>
    <nav>
        <a href="../Controleur/logout.php" class="top">
            Déconnexion
        </a>
    </nav>
    <center><img class="image" src="../Image/ban.png"></center><!-- width="300" height="500"-->
    <ul class="bar">
        <li class="barre"><a href="C_Home.php">Accueil</a></li>
        <li class="barre"><a href="GererVotreMaison.php">Gérez votre maison</a></li>
        <li class="barre"><a href="CodeStats.html">Statistiques</a></li>
        <li class="barre"><a href="compte.html">Compte</a></li>
    </ul>

    <a href="Aide.html" target="_blank"><img class="help" type="button" src="../Image/help2.png"
                                             alt="Besoin d'aide ?" height="4%" width="auto"/><a/>
</header>

<?php
// Connexion à la base de données

include('../Modele/Connexion.php');
$reponse = $BDD->query('SELECT Porte,Voie,Adresse,Code_Postal,Ville,Nombre_Piece,Nombre_Etage FROM maison WHERE IdUtilisateur="'.$_SESSION['IdUtilisateur'].'"');
?>


<form method="post" action="../Controleur/maisoncible2.php">
    <p>
        Veuillez indiquer quel domicile vous voulez retirer :<br/>
        <?php while ($donnees = $reponse->fetch()) {
            echo '<input type="radio" name="test" value="' . $donnees['Porte'] . '"  id="test"/>
                    <label for="test">
                ' . $donnees['Porte'] . ' 
                ' .
                $donnees['Voie'] . ' 
                    ' .
                $donnees['Adresse'] . ' 
                    ' .
                $donnees['Code_Postal'] . ' 
                    ' .
                $donnees['Ville'] .
                '</br></label>';
        }
        ?>
        </label></br>
        <input type="submit" name="submit" value="Supprimer la sélection"/>

    </p>
</form>

<div id="pied">

    <a name="haut" id="haut"</a>
    <div><a id="cRetour" class="cInvisible" href="#haut"></a></div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.onscroll = function(ev) {
                document.getElementById("cRetour").className = (window.pageYOffset > 100) ? "cVisible" : "cInvisible";
            };
        });
    </script>

    <p>
        <br>
        <br>
        <br>
        <br>
        À PROPOS
        <br>
        <br>
        Copyright 2017 C-HOME.
        <br>
        <br>
        All Rights Reserved.

        <br>
        <br>
        <br>
        <br>
    </p>
</div>
