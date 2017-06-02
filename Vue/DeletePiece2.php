<?php
include '../Controleur/start_session.php';
include '../Vue/header.html';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Supprimer un capteur</title>

    <link rel="stylesheet" href="../CSS/GererVotreMaison.css">


    <title>Suppresion d'une pièce</title>

    <script type="text/javascript" src="../Js/scroll.js"></script>
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

<div class="Etat">
    <h3>Suppression réussie</h3>
<FORM method="post" action="../Controleur/DeleteP.php">
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
        <select id="Piece" name="Piece" size="1">
            <!--<option selected="selected" value="">Choisissez</option>-->
            <?php
                        include '../Controleur/Piece.php'
                        ?>
        </select>
    </p>
    <br>
    <input type="submit" value="Supprimer">
</FORM>
</div>

<?php
include '../Vue/footer.html';
?>
</body>
</html>