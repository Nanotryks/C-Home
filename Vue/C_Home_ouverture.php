<?php
include '../Controleur/start_session.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/design_global.css" />
    <link rel="stylesheet" href="../CSS/C_Home_ouverture.css">
    <link rel="stylesheet" href="../CSS/bouton_remonter.css" />
    <link rel="icon" href="../Image/Logopic.ico">
    <title>C-Home / Accueil</title>
    <script type="text/javascript" src="../Js/scroll.js"></script>
    <script>
        function showUser(str)
        {
            if (str == "")
            {
                document.getElementById("Capteur").innerHTML = "";
                return;
            }

            if (window.XMLHttpRequest) {

                xmlhttp= new XMLHttpRequest();
            } else {

                if (window.ActiveXObject)
                    try {
                        xmlhttp= new ActiveXObject("Msxml2.XMLHTTP");
                    } catch (e) {
                        try {
                            xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
                        } catch (e) {
                            return NULL;
                        }
                    }
            }

            xmlhttp.onreadystatechange = function ()
            {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                {

                    document.getElementById("Capteur").innerHTML = xmlhttp.responseText;

                }
            }

            xmlhttp.open("GET", "../Controleur/EtatFP.php?q=" + str, true);

            xmlhttp.send();


        }

    </script>
</head>

<body>

<header id="haut">
        <a class="retour" href="javascript:history.go(-1)">⇦</a>
        <a class="avancer" href="javascript:history.go(+1)">⇨</a>
        <nav>
            <a href="../Controleur/logout.php" class="top">
                Déconnexion
            </a>
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
            <SELECT name="Maison" size="1" onchange="showUser(this.value)">
                <option selected="selected" value="">Choisissez</option>
                <?php
                include "../Controleur/Maison.php";
                ?>
            </SELECT>
            </br>
            </br>
            <div id="Capteur">
                <?php
                include '../Controleur/Capteur.php';
                ?>
            </div>
        </div>
    </div>
    <div id="section">
        <div class="site">
            <header class="titre">INFORMATIONS SUR L'ENTREPRISE</header>
            <br><br>

            <p>C Home Corporation</p>

            <p>Mail : </p>
            <p>10 rue de Vanves</p>
            <p>92130 ISSY LES MOULINEAUX</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.7390397216686!2d2.2779324156780496!3d48.82504037928424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6707980bd3947%3A0xd54fb6c5e1933333!2s10+Rue+de+Vanves%2C+92170+Issy-les-Moulineaux!5e0!3m2!1sfr!2sfr!4v1492426882176"
                    width="400" height="200" frameborder="0" style="border" allowfullscreen></iframe>
        </div>
        <div class="app">
            <header class="app_titre">BIENTÔT</header>
            <br><br><br><br>

            <div id ="appliandroapple">

                <div id="android">
                    <a href="https://play.google.com/store/apps?hl=fr"><img src="../Image/andro.png" height="200px" width="auto"></a>
                </div>
                <div id="apple">
                    <a href="https://itunes.apple.com/fr/app/apple-store/id375380948?mt=8"><img src="../Image/apple.png" height="200px" width="auto"></a>
                </div>

            </div>

            <br><br>
            <p>Bientôt des applications disponibles pour </br>vous permettre de gérer votre/vos domicile(s)</br> depuis votre
                smartphone ou votre tablettes
            </p></br>

        </div>
    </div>

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
</body>
</html>