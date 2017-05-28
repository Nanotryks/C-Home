<?php
include '../Controleur/start_session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nouvelle Pièce</title>
    <link rel="stylesheet" href="../CSS/GererVotreMaison.css">
    <link rel="icon" type="image/ico" href="../Image\Logopic.ico " />
</head>
<body>
<header>
    <a class="retour" href="javascript:history.go(-1)">⇦</a>
    <a class="avancer" href="javascript:history.go(+1)">⇨</a>
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

    <a href="index.php" target="_blank"><img class="help" type="button" src="../Image/help2.png" alt="Besoin d'aide ?" height="4%" width="auto"/></a>
</header>
<div class="Etat">
<FORM method="post" action="../Controleur/AjoutP.php">
    <p>
        <img class="maison" src="../Image/Maison.png">
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
</body>
</html>