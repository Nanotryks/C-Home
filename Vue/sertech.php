<?php
include '../Controleur/start_session.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Service Technique</title>
    <link rel="stylesheet" href="../CSS/sertech.css"/>
    <link rel="icon" type="image/ico" href="Image\Logopic.ico"/>
</head>

<body>

<header>
    <a class="retour" href="javascript:history.go(-1)">⇦</a>
    <a class="avancer" href="javascript:history.go(+1)">⇨</a>
    <nav>
        <a href="../Controleur/logout.php" class="top">
            Déconnexion
        </a>
    </nav>
    <center><img class="image" src="../Image/ban.png"></center><!-- width="300" height="500"-->
    <ul class="bar">
        <li class="barre"><a href="C_home.php">Accueil</a></li>
        <li class="barre"><a href="GererVotreMaison.php">Gérez votre maison</a></li>
        <li class="barre"><a href="CodeStats.html">Statistiques</a></li>
        <li class="barre"><a href="compte.html">Compte</a></li>
    </ul>

    <a href="index.php" target="_blank"><img class="help" type="button" src="../Image/help2.png"
                                                    alt="Besoin d'aide ?" height="4%" width="auto"/></a>
</header>

<div id="bloctot">
    <div id="bloc_envoyertechnicien" class="">
        <br>
        <h2>ENVOYER UN TECHNICIEN </h2>

        <br>


        <p>
            <label for="pseudo">Numéro d'utilisateur</label> <br/>
            <br>
            <input type="text" name="pseudo" id="pseudoP1" maxlength="4" size="4" value="XXXX" onFocus="javascript:this.value=''"/>
            <input type="text" name="pseudo" id="pseudoP2" maxlength="4" size="4" value="XXXX" onFocus="javascript:this.value=''"/>
            <input type="text" name="pseudo" id="pseudoP3" maxlength="4" size="4" value="XXXX" onFocus="javascript:this.value=''"/>
            <input type="text" name="pseudo" id="pseudoP4" maxlength="4" size="4" value="XXXX" onFocus="javascript:this.value=''"/>
            <br>
            <br>
            <label>Détails du problème</label> <br/>
            <br>
            <textarea name="explication" rows=5 cols=40>  </textarea><br/>
            <br>
            <input type="submit" value="Envoyer"/>
        </p>
        <br>
        <br>
        <br>
        <br>


    </div>



    <div id="bloc_contacterconseiller" class="">
        <div class="bloc_titre"> CONTACTER UN CONSEILLER
            <script>
                function myNewFunction(sel)
                {
                    document.getElementById("result").innerHTML=sel.options[sel.selectedIndex].id;
                }
            </script>
            <select name="group" id="group" onChange="myNewFunction(this);">
                <option value="0" id="0159595932">Type de support requis</option>
                <option value="1" id="0188946890">Service technique capteurs</option>
                <option value="2" id="0125934344">Service technique réseaux </option>
                <option value="3" id="0134595959">Service technique sécurité</option>
                <option value="4" id="0153464744">Autre</option>
            </select>



            <div id="bloc_telephone" class=" Par Téléphone">
                <h3>Par Téléphone</h3> </div>
            <div id="result">
            </div>
        </br>
        </br>
        <div id="horaires">
            - du lundi au vendredi de 8h30 à 20h
            <br/>- le samedi de 8h30 à 17h
        </div>
        <div id="bloc_mail" class=" Par mail">
            <h3>Par Mail</h3></div>
        <div id="content">
            <p><a id="mail" href="mailto:lyes.bounoua@isep.fr">Envoyez-moi un e-mail !</a></p>
        </div>
    </div>



</div>
</div>
</div>
<footer>

    <div id="photos">
        <h1>Nos capteurs</h1>
        <br>
        <p><img id="p1" src="../Image/photo1.jpeg" width="200px" height="auto"/><img id="p2" src="../Image/photo2.jpeg" width="200px" height="auto"/><img id="p3" src="../Image/photo3.jpeg" width="200px" height="auto"/></p>
    </div>


</footer>

</body>
</html>