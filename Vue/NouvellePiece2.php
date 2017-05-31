<?php
include '../Controleur/start_session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nouvelle Pièce</title>
    <link rel="stylesheet" href="../CSS/GererVotreMaison.css">
    <link rel="stylesheet" href="../CSS/design_global.css" />
    <link rel="stylesheet" href="../CSS/bouton_remonter.css" />
    <link rel="icon" href="../Image/Logopic.ico">
    <title>Ajout d'une pièce</title>

    <script type="text/javascript" src="../Js/scroll.js"></script>
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
        <li class="barre"><a href="C_home.php">Accueil</a></li>
        <li class="barre"><a href="GererVotreMaison.php">Gérez votre maison</a></li>
        <li class="barre"><a href="CodeStats.html">Statistiques</a></li>
        <li class="barre"><a href="compte.html">Compte</a></li>
    </ul>

    <a href="Aide.html" target="_blank"><img class="help" type="button" src="../Image/help2.png" alt="Besoin d'aide ?" height="4%" width="auto"/></a>
</header>
<div class="Etat">
    <h3>Ajout Réussi</h3>
<FORM method="post" action="../Controleur/AjoutP.php">
    <p>
        <img class="maison" src="../Image/gerer_maison.png">
    </p>

    <p>
        <SELECT name="Maison" size="1" >
            <option selected="selected" value="">Choisissez</option>
            <?php
                        include "../Controleur/Maison.php";
                        ?>
        </SELECT>
    </p>

        <label>Nom de la pièce</label>
        <br>
        <input type="text" name="Piece">
    <br>
    <input type="submit" value="Ajouter">
</FORM>
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