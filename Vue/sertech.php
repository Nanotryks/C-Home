<?php
include '../Controleur/start_session.php';
include '../Vue/header.html';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Service Technique</title>
    <link rel="stylesheet" href="../CSS/sertech.css"/>

    <title>Service technique</title>

    <script type="text/javascript" src="../Js/scroll.js"></script>
</head>

<body>

<div id="bloctot">

    <div id="bloc_contacterconseiller" class="">
        <div class="bloc_titre">
            <br>
            <h2>CONTACTER UN CONSEILLER</h2>

            <script>
                function myNewFunction(sel) {
                    document.getElementById("result").innerHTML = sel.options[sel.selectedIndex].id;
                }
            </script>
            <select name="group" id="group" onChange="myNewFunction(this);">
                <option value="0" id="01 59 59 59 32">Type de support requis</option>
                <option value="1" id="01 88 94 68 90">Service technique capteurs</option>
                <option value="2" id="01 25 93 43 44">Service technique réseaux</option>
                <option value="3" id="01 34 59 59 59">Service technique sécurité</option>
                <option value="4" id="01 53 46 47 44">Autre</option>
            </select>

            <div id="bloc_telephone" class=" Par Téléphone">
                <h3>Par Téléphone</h3></div>
            <div id="result">
            </div>
            </br>
            </br>
            <div id="horaires">
                - du Mardi au Samedi de 9h à19h
                <br/>- le samedi de 8h30 à 17h
            </div>
            <div id="bloc_mail" class=" Par mail">
                <h3>Par Mail</h3>
            </div>
            <div id="content">
                <p><a id="mail" href="mailto:lyes.bounoua@isep.fr">Envoyez un mail ! (réponse sous 24h) </a></p>
            </div>
        </div>
    </div>

    <div id="bloc_envoyertechnicien" class="">
        <br>
    
<form action="../Controleur/message.php" method="post">
        <label for="message"><h2>CONTACTER UN ADMINISTRATEUR</h2></label><br>
        <textarea id="message" name="message" rows="15" cols="50" type="text"></textarea><br><br>
        <input type="submit" class="btn" value="Envoyer">
        </form>

    </div>
</div>


<?php
include '../Vue/footer.html';
?>
</body>
</html>