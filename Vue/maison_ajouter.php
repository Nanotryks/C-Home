<?php
session_start();
if (!isset($_SESSION['pass'])) {
	header ('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../CSS/Maison.css"/>
    <link rel="icon" type="ico" href="../Image/Logopic.ico"/>
    <title>Ajout d'une maison</title>
</head>

<body>
<!--<img src="Image\Logop.png" alt="Logo de C-Home" class="logo"/>-->
<header>
    <nav class="top">
        <div><a href="../Controleur/logout.php"> <input type="button" value="Déconnexion"></a>
        Langue :
        <SELECT name="Langue" size="1">
            <OPTION>Français
            <OPTION>English
        </SELECT>
        </div>
    </nav>
    <center><img class="image" src="../Image/ban.png"></center><!-- width="300" height="500"-->
    <ul class="bar">
        <li class="barre"><a href="C_Home.php">Accueil</a></li>
        <li class="barre"><a href="GererVotreMaison.php">Gérez votre maison</a></li>
        <li class="barre"><a href="CodeStats.html">Statistiques</a></li>
        <li class="barre"><a href="compte.html">Compte</a></li>
    </ul>

    <a href="index.php" target="_blank"><img class="help" type="button" src="../Image/help2.png"
                                             alt="Besoin d'aide ?" height="4%" width="auto"/><a/>
</header>

<div>
    <h1>Ajout d'une maison</h1>

    <form class="formulaire_maison" method="post" action="../Controleur/maisoncible.php">
        <p>
            <label for="nom">Nom</label> : <br/>
            <input type="text" name="nom" id="nom"/><br/>
            <label for="porte">Numéro de porte</label> : <br/>
            <input type="number" name="porte" id="porte" min="0"/>
            <br/>
            <label for="voie">Type de voie</label><br />
            <select name="voie" id="voie">
                <option value="rue">Rue</option>
                <option value="boulevard">Boulevard</option>
                <option value="avenue">Avenue</option>
                <option value="place">Place</option>
                <option value="impasse">Impasse</option>
                <option value="chemin">Chemin</option>
            </select>
            <br/>

            <label for="adresse">Nom de la voie</label><br/>
            <input type="text" name="adresse" id="adresse">
            <br/>

            <label for="code_postal">Code postal</label> : <br/>
            <input type="number" name="code_postal" id="code_postal" min="0" step="10"/>
            <br/>

            <label for="ville">Ville</label><br/>
            <input type="text" name="ville" id="ville"/>
            <br/>

            <label for="nombre_pieces">Veuillez indiquer le nombre de pièces <br/> dont dispose votre domicile</label> : <br/>
            <input type="number" name="nombre_pieces" id="nombre_pieces" min="0"/>
            <br/>

            <label for="nombre_etages">Veuillez indiquer le nombre d'étages <br/> dont dispose votre domicile</label> : <br/>
            <input type="number" name="nombre_etages" id="nombre_etages" min="0"/>
            <br/>
            <br/>

            <input type="submit" value="Ajouter une maison"/>
        </p>
    </form>