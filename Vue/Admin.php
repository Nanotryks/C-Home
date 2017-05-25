<?php
session_start();
if (!isset($_SESSION['pass'])) {
    header ('Location: index.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/Admin.css">
    <link rel="icon" href="../Image/Logopic.ico">
    <title>Section Administrateur</title>
</head>

<body>
<header>
    <nav class="top">
        <div id="con"><a href="../Controleur/logout.php"> <input type="button" value="Déconnexion"></a>
            Langue :
            <SELECT name="Langue" size="1">
                <OPTION>Français
                <OPTION>English
            </SELECT>
        </div>
    </nav>
    <center><img class="image" src="../Image/ban.png"></center>
    <ul class="bar">
        <li class="barre"><a href="C_home.php">Accueil</a></li>
        <li class="barre"><a href="GererVotreMaison.php">Gérez votre maison</a></li>
        <li class="barre"><a href="CodeStats.html">Statistiques</a></li>
        <li class="barre"><a href="compte.html">Compte</a></li>
    </ul>

    <a href="Aide.html" target="_blank"><img class="help" type="button" src="../Image/help2.png" alt="Besoin d'aide ?" height="4%" width="auto"/>
    </a>
</header>

    <div id="Moderate">
        <h2>Modérateur</h2>

        <p>
            Sélectionnez un utilisateur :
            <SELECT name="User" size="1">
                <OPTION>#1497
                <OPTION>#1632
                <OPTION>#1992
                <OPTION>#0792
                <OPTION>#3447

            </SELECT>
        </p>

    </div>
</body>
<foot>
    <p class="droit">All rigth</p>
</foot>
</html>