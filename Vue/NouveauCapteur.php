<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nouveau capteur</title>
    <link rel="stylesheet" href="../CSS/GererVotreMaison.css">
    <link rel="icon" type="image/ico" href="../Image\Logopic.ico " />
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

            xmlhttp.open("GET", "../Controleur/DeleteCapteur.php?q=" + str, true);

            xmlhttp.send();


        }

    </script>
</head>
<body>
<header>
    <nav class="top">
        <div><a href="../Controleur/logout.php"> <input type="button" value="Déconnexion"></a>
            Langue :
            <SELECT name="Langue" size="1">
                <OPTION>Français</OPTION>
                <OPTION>English</OPTION>
            </SELECT>
        </div>
    </nav>
    <center><img class="image" src="../Image/ban.png"></center><!-- width="300" height="500"-->
    <ul class="bar">
        <li class="barre"><a href="C_home.php">Accueil</a></li>
        <li class="barre"><a href="GererVotreMaison.php">Gérez votre maison</a></li>
        <li class="barre"><a href="CodeStats.html">Statistiques</a></li>
        <li class="barre"><a href="compte.html">Compte</a></li>
    </ul>

    <a href="inscription.html" target="_blank"><img class="help" type="button" src="../Image/help2.png" alt="Besoin d'aide ?" height="4%" width="auto"/></a>
</header>
<div class="Etat">
<FORM method="post" action="../Controleur/Ajout.php">
    <p>
        <img class="maison" src="../Image/Maison.png">
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
        <select id="Piece" name="Piece" size="1" >
            <!--<option selected="selected" value="">Choisissez</option>-->
            <?php
                        include '../Controleur/Piece.php'
                        ?>
        </select>
    </p>
        <label>Type de capteur</label>
        <br>
        <input type="text" name="Capteur">
    <br>
    <input type="submit" value="Ajouter">
</FORM>
</div>
</body>
</html>