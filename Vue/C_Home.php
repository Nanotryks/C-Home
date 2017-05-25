<?php
include '../Controleur/start_session.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/C_Home.css">
    <link rel="icon" href="../Image/Logopic.ico">
    <title>C-Home / Accueil</title>
 </head>
<body>
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
       <div id="backmenu">
        <div id="menu">
            <ul id="onglets">
                <li class="active"><a href="C_home.php"> Utilisateurs connectés </a></li>
                <li class="active1"><a href="C_home_lumiere.php"> Lumières </a></li>
                <li class="active2"><a href="C_Home_temperature.php"> Température </a></li>
                <li class="active3"><a href="C_home_ouverture.php"> Etat des ouvertures </a></li>
            </ul>
            <p>Etat : <?php
                include '../Modele/Connexion.php';

                if($BDD)
                {
                    echo 'Connecté à votre maison';
                }
                else
                {
                    echo 'Déconnecté de votre maison';
                }?></p>
        </div>
    </div>
        <section>
        <div id="footer">
        <div class="site">
            <header class="titre">Information sur l'entreprise</header>
            <p>C Home Corporation</p>
            <p>Mail : </p>
            <p>10 rue de Vanves
                92130 ISSY LES MOULINEAUX</p>
            <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.7390397216686!2d2.2779324156780496!3d48.82504037928424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6707980bd3947%3A0xd54fb6c5e1933333!2s10+Rue+de+Vanves%2C+92170+Issy-les-Moulineaux!5e0!3m2!1sfr!2sfr!4v1492426882176" width="250" height="150" frameborder="0" style="border" allowfullscreen ></iframe></center>
        </div>
        <div class="app">
            <header class="app_titre">Coming Soon</header>
            <center><img src="../Image/Android_apple.png"></center>
            <p>Bientot des applications pour gérer vos maisons depuis votre téléphone
            </p></br>
        </div>
        </section>

</body>
<foot>
    <p class="droit">All rigth</p>
</foot>
</html>