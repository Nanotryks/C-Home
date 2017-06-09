<?php
include '../Controleur/start_session.php';
include '../Vue/header_admin.html';?>

<!DOCTYPE html>
<html lang="fr">

<!-- Modifier le critère de recherche-->

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/Admin.css">
    <link rel="icon" href="../Image/Logopic.ico">
    <title>Section Administrateur</title>
    <script>
        function showUser(str) {
            if (str == "") {
                document.getElementById("Rechercher").innerHTML = "";
                return;
            }

            if (window.XMLHttpRequest) {

                xmlhttp = new XMLHttpRequest();
            } else {

                if (window.ActiveXObject)
                    try {
                        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
                    } catch (e) {
                        try {
                            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                        } catch (e) {
                            return NULL;
                        }
                    }
            }

            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                    document.getElementById("Rechercher").innerHTML = xmlhttp.responseText;

                }
            }

            xmlhttp.open("GET", "../Controleur/SearchAdmin.php?q=" + str, true);

            xmlhttp.send();


        }

    </script>
</head>

<body>

<form method="post" action="../Controleur/admin_delete.php">
    <div id="Moderate">
        <h2>Modérateur</h2>
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
    </br>
    <input type="submit" value="Supprimer le compte">

    </div>
</form>

<div id="util">
    <h2>Utilisateurs connectés</h2>

    <div class="showuserScroll">

            <p>Utilisateur #0136</p>
        <p>Utilisateur #0178</p>
        <p>Utilisateur #0630</p>
        <p>Utilisateur #0412</p>

    </div>
</div>
    <? include '../Vue/footer_admin.html';
    ?>
</body>

</html>