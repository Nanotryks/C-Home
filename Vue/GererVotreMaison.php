<?php
include '../Controleur/start_session.php';
include '../Vue/header.html';
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

    <title>Gérez votre maison</title>

    <script type="text/javascript" src="../Js/scroll.js"></script>
    <script type="text/javascript" src="../Js/GererVotreMaison.js"></script>
    <script>

        function showUser3(str)
        {
            if (str == "")
            {
                document.getElementById("Radio").innerHTML = "";
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

                    document.getElementById("Radio").innerHTML = xmlhttp.responseText;

                }
            }

            xmlhttp.open("GET", "../Controleur/Radio.php?q=" + str, true);

            xmlhttp.send();


        }
        function showUser4(str)
        {
            if (str == "")
            {
                document.getElementById("Radio").innerHTML = "";
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

                    document.getElementById("Radio").innerHTML = xmlhttp.responseText;

                }
            }

            xmlhttp.open("GET", "../Controleur/ChangeMode.php?q=" + str, true);

            xmlhttp.send();


        }

        function showUser5(str)
        {

            if (str == "")
            {
                document.getElementById("envoie").innerHTML = "";
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

                    document.getElementById("envoie").innerHTML = xmlhttp.responseText;

                }
            }

            xmlhttp.open("GET", "../Controleur/recupCmac.php?q=" + str, true);

            xmlhttp.send();


        }
        </script>
</head>


<body>

<div class="Etat">
    <div id="Maison">

    </div>
    <br>
    <h1 class="titre">Gerez votre maison</h1>
    <div class="gestion">

        <FORM id="maisons">
            <p>
                <img class="maison" src="../Image/gerer_maison.png">
            </p>

            <p>
                <SELECT name="Maison" size="1" onchange="showUser(this.value)" style="width:150px;">
                    <option selected="selected" value="">Choisissez</option>
                    <?php
                    include "../Controleur/Maison.php";
                    ?>
                </SELECT>
            </p>
            <div id="tout">
            <p>
                <select id="Piece" name="Piece" size="1" onchange="showUser2(this.value)" style="width:150px;">

                    <?php
                    include '../Controleur/Piece.php'
                    ?>
                </select>
            </p>
            <br>
            <div id="Capteur">
                <?php
                include '../Controleur/Capteur.php';
                ?>
            </div>
            </div>
        </FORM>

        <input type="button" value="Activation du ventilateur" onclick="showUser5(3)">
        <input type="button" value="Activation d'une led" onclick="showUser5(2)">
        <input type="button" value="Arret" onclick="showUser5(4)">
        <div id="envoie"></div>

        <br>
        <br>
    </div>
</div>
<br/>
<br/>
<div class="options">
    <br>
    <h1> Sélectionnez une des options suivantes</h1>
    <br/>
    <img src="..\Image\addsensor.png" alt="ajout d'un capteur" class="addsensor"/></br>
    <br>
    <a href="NouveauCapteur.php"> <input type="button" value="Nouveau capteur"></a>
    <a href="DeleteCapteur.php"> <input type="button" value="Supprimer un capteur"></a>
    <br/>
    <br/>
    <br>
    <img src="..\Image\room.png" alt="ajout/suppression de pièces" class="room"/></br>
    <br>
    <a href="NouvellePiece.php"> <input type="button" value="Nouvelle pièce"></a>
    <a href="DeletePiece.php"> <input type="button" value="Supprimer une piece"></a>
</div>

<div id="mode">
    <h1>Automatique/Manuel</h1><br>
    <form method='post' action='../Controleur/ModeChange.php'>
    <select name="capteur" onchange="showUser3(this.value)">
        <option name="Choisissez" selected="selected" value="">Choississez</option>
        <option name="Température" value="Température">Température</option>
        <option name="Lumière" value="Lumière">Lumière</option>
    </select><br><br>
    <div id="Radio">

    </div>
    </form>
</div>

<script>
    //    var a=10000;
    //    setInterval('rafraichir()',a);
    //    function rafraichir()
    //    {
    //        $('#Capteur').load('../Controleur/Capteur.php');
    //    }

</script>


<?php
include '../Vue/footer.html';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
    var str2 =  document.getElementById("Piece").value;

    $(document).ready( function(){

        showUser2(str2);
        $('#Capteur').fadeOut('slow').load("GET", "../Controleur/ChangeMode.php?q=" + str2, true).fadeIn('slow');

        refresh();
    });

    function refresh()
    {
        setTimeout(function() {


            str2 =  document.getElementById("Piece").value;

            showUser2(str2);
            $('#Capteur').fadeOut('slow').load("GET", "../Controleur/ChangeMode.php?q=" + str2, true).fadeIn('slow');

           refresh()
        }, 2500);

    }

    function envoyer(val)
    {
        $('#envoie').load("GET", "../Controleur/recupCmac.php?q=" + val, true);
    }
</script>
</body>
</html>
