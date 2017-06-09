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
                document.getElementById("Piece").innerHTML = "";
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

                    document.getElementById("Piece").innerHTML = xmlhttp.responseText;

                }
            }

            xmlhttp.open("GET", "../Controleur/PieceAdmin.php?q=" + str, true);

            xmlhttp.send();


        }

        function showUser2(str) {
            if (str == "") {
                document.getElementById("Capteur").innerHTML = "";
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

                    document.getElementById("Capteur").innerHTML = xmlhttp.responseText;

                }
            }

            xmlhttp.open("GET", "../Controleur/CapteurAdmin.php?q=" + str, true);

            xmlhttp.send();


        }
        function showUser3(str) {
            if (str == "") {
                document.getElementById("Maison").innerHTML = "";
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

                    document.getElementById("Maison").innerHTML = xmlhttp.responseText;

                }
            }

            xmlhttp.open("GET", "../Controleur/MaisonAdmin.php?q=" + str, true);

            xmlhttp.send();


        }

    </script>
</head>

<body>

<div id="Stats">
    <h2>Statistiques</h2>


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

<div id="util">
    <h2>util</h2>
</div>
<?php
include '../Vue/footer_admin.html';
?>
</body>
</html>