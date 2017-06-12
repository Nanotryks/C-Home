<?php
include '../Controleur/start_session.php';
include '../Vue/header.html';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="../CSS/Maison.css"/>

    <title>Lieux de résidence</title>

    <script type="text/javascript" src="../Js/scroll.js"></script>
    <script>

        function showUser(str)
        {
            if (str == "")
            {
                document.getElementById("votre_maison").innerHTML = "";
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
                    document.getElementById("votre_maison").innerHTML = xmlhttp.responseText;

                }
            }

            xmlhttp.open("GET", "../Controleur/Votre_Maison.php?q=" + str, true);

            xmlhttp.send();


        }
    </script>
</head>

<body>
<!--<img src="Image\Logop.png" alt="Logo de C-Home" class="logo"/>-->


<div class="lieu">

    <?php
    // Connexion à la base de données
    include('../Modele/Connexion.php');
    $reponse = $BDD->query('SELECT Nom,Porte,Voie,Adresse,Code_Postal,Ville,Nombre_Piece,Nombre_Etage FROM maison WHERE IdUtilisateur="'.$_SESSION['IdUtilisateur'].'"');
    $reponse2 = $BDD->query('SELECT Porte,Voie,Adresse,Code_Postal,Ville,Nombre_Piece,Nombre_Etage FROM maison WHERE IdUtilisateur="'.$_SESSION['IdUtilisateur'].'"');
    ?>


    <h1>Lieux de résidence</h1>
    <form class="choix" method="post" action="../Controleur/maisoncible.php">
        <br>
        <label for="choix_maison">Veuillez indiquer votre lieu de résidence actuel :</label><br/>
        <br>
        <select name="choix_maison" id="choix_maison" onchange="showUser(this.value)">
            <?php while ($donnees = $reponse->fetch()) {
                echo '<option value=' . $donnees['Porte'] . '>
                    ' . $donnees['Porte'] .
                    ' ' .
                    $donnees['Voie'] .
                    ' ' .
                    $donnees['Adresse'] .
                    ' ' .
                    $donnees['Code_Postal'] .
                    ' ' .
                    $donnees['Ville'] .
                    '</option>';
            } ?>
            </option>

        </select>


<!--        <input type="submit" name="maison_actuelle" value="Faire de cette adresse mon adresse actuelle" class="actual"/>-->
        </br><br>
        </br>
        <img src="..\Image\addhouse.png" alt="ajout d'une maison" class="addhouse"/></br></br>
        <a href="maison_ajouter.php"><input type="button" name="Ajouter une maison " value="Ajouter une maison" class="actual"/></a></br></br>
        <img src="..\Image\deletehouse.png" alt="supression d'une maison" class="deletehouse" /></br></br>
        <a href="maison_supprimer.php"><input type="button" name="Supprimer une maison " value="Supprimer une maison" class="actual"/></a></br></br> </br>

    </form>
</div>
<h1>Votre maison</h1>
<div id="votre_maison">
    <br>
    <?php $donnees2 = $reponse2->fetch();?>
    Nombre de pièces : <?php echo $donnees2['Nombre_Piece']?> </br><br>

    Nombre d'étages : <?php echo $donnees2['Nombre_Etage']?>

    <br><br>
</div>


<?php
include '../Vue/footer.html';
?>
</body>

</html>