<?php
include '../Controleur/start_session.php';
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/Admin.css">
    <link rel="icon" href="../Image/Logopic.ico">
    <title>Section Administrateur</title>
    <script>
        function showUser(str)
        {
            if (str == "")
            {
                document.getElementById("Rechercher").innerHTML = "";
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

                    document.getElementById("Rechercher").innerHTML = xmlhttp.responseText;

                }
            }

            xmlhttp.open("GET", "../Controleur/SearchAdminCapt.php?q=" + str, true);

            xmlhttp.send();


        }

    </script>
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
        <li class="barre"><a href="Admin.php">Modérateur</a></li>
        <li class="barre"><a href="AdminCapteurs.php">Capteurs</a></li>
        <li class="barre"><a href="AdminStats.php">Statistiques</a></li>
        <li class="barre"><a href="compte.html">Compte</a></li>

    </ul>

    <a href="Aide.html" target="_blank"><img class="help" type="button" src="../Image/help2.png" alt="Besoin d'aide ?" height="4%" width="auto"/>
    </a>
</header>

<div id="Moderate">
    <h2>Capteurs</h2>


    <label>Identifiant du client : </label>
    <input type="search" name="search" onchange="showUser(this.value)" maxlength="4" size="4">
    <button type="button" value="Rechercher">Rechercher</button>
    <!--        --><?php
    //
    //            include "../Modele/Connexion.php";
    //
    //            $query =$BDD->query("SELECT IdUtilisateur, nom, prenom, mail, telephone, numero_abonne FROM utilisateur ORDER BY IdUtilisateur");
    //            ?>
    <!---->
    <!--            <select name="categories" onchange="showUser(this)">-->
    <!--        --><?php //
    //            while ($row = $query->fetch())
    //            {
    //                echo "<option id='".$row['IdUtilisateur']."' value='".$row['path']."'>".$row['prenom']." ".$row['nom']."</option>";
    //            }
    //            ?><!--        -->
    <!--            </select>-->


    <div id="Rechercher">

    </div>

    <div id="capteurs">

    </div>


</div>
</body>
<foot>
    <p id="droit"><a href="ConditionUtili.html">Conditions générales d'utilisatation</a></p>
</foot>
</html>