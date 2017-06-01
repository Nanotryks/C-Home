<?php
include '../Controleur/start_session.php';
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gérer votre Maison</title>
    <link rel="stylesheet" href="../CSS/GererVotreMaison.css"/>
    <link rel="stylesheet" href="../CSS/design_global.css" />

    <link rel="stylesheet" href="../CSS/bouton_remonter.css" />
    <link rel="icon" href="../Image/Logopic.ico">
    <title>Gérez votre maison</title>

    <script type="text/javascript" src="../Js/scroll.js"></script>
</head>
<script>

    function showUser(str)
    {
        if (str == "")
        {
            document.getElementById("Piece").innerHTML = "";
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

                document.getElementById("Piece").innerHTML = xmlhttp.responseText;

            }
        }

        xmlhttp.open("GET", "../Controleur/Piece.php?q=" + str, true);

        xmlhttp.send();


    }

    function showUser2(str)
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

        xmlhttp.open("GET", "../Controleur/Capteur.php?q=" + str, true);

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
    <center><img class="image" src="../Image/ban.png"></center><!-- width="300" height="500"-->
    <ul class="bar">
        <li class="barre"><a href="C_Home.php">Accueil</a></li>
        <li class="barre"><a href="GererVotreMaison.php">Gérez votre maison</a></li>
        <li class="barre"><a href="CodeStats.php">Statistiques</a></li>
        <li class="barre"><a href="../Vue/compte.html">Compte</a></li>
    </ul>

    <a href="Aide.html" target="_blank"><img class="help" type="button" src="../Image/help2.png" alt="Besoin d'aide ?" height="4%" width="auto"/></a>
</header>
    <div class="Etat">
        <div id="Maison">

        </div>
        <h1 class="titre">Gerez votre maison</h1>
        <div  class="gestion">

            <FORM id="maisons">
                <p>
                    <img class="maison" src="../Image/gerer_maison.png">
                </p>

                <p>
                    <SELECT name="Maison" size="1" onchange="showUser(this.value)">
                        <option selected="selected" value="">Choisissez</option>
                        <?php
                        include "../Controleur/Maison.php";
                        ?>
                    </SELECT>
                </p>
                <p>
                    <select id="Piece" name="Piece" size="1" onchange="showUser2(this.value)">
                        <!--<option selected="selected" value="">Choisissez</option>-->
                        <?php
                        include '../Controleur/Piece.php'
                        ?>
                    </select>
                </p>
                <div id="Capteur">
                    <?php
                    include '../Controleur/Capteur.php';
                    ?>
                </div>
            </FORM>

        <br>
        </div>
    </div>
<br/>
<br/>
<div class="options">
    <h1> Sélectionnez une des options suivantes</h1>
    <br/>
    <img src="..\Image\addsensor.png" alt="ajout d'un capteur" class="addsensor"/></br>
<a href="NouveauCapteur.php"> <input type="button" value="Nouveau capteur"></a>
<a href="DeleteCapteur.php"> <input type="button" value="Supprimer un capteur"></a>
<br/>
<br/>
    <img src="..\Image\room.png" alt="ajout/suppression de pièces" class="room"/></br>
<a href="NouvellePiece.php"> <input type="button" value="Nouvelle pièce"></a>
<a href="DeletePiece.php"> <input type="button" value="Supprimer une piece"></a>
</div>

<script>
//    var a=10000;
//    setInterval('rafraichir()',a);
//    function rafraichir()
//    {
//        $('#Capteur').load('../Controleur/Capteur.php');
//    }

</script>

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
