<?php
include '../Vue/header.html';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

      <link rel="stylesheet" href=" ../CSS/Statistiques.css"/>

    <link rel="stylesheet" href="../CSS/Stat.css" />

    <title>Statistiques</title>

    <script type="text/javascript" src="../Js/scroll.js"></script>
</head>
<body style="position: relative;">

<div class="Consommation">
	<div class="Eau">
        <div>

        <ul>
            <li><a href="PageEau.html">Eau</a></li>
            <li><a href="PageElec.html">Électricité</a></li>

        </ul>

    </div>

		<div class="Conso">

        <div id="jour">
		<h2>

			TEMPÉRATURE EN TEMPS RÉELS

			
		</h2>
            <table>
                <caption>Température</caption>
                <tr>
                    <?php
                    include "../Controleur/BareSupTemp.php";
                    ?>
                </tr>
                <tr>
                    <?php
                    include "../Controleur/BareInfTemp.php";
                    ?>
                </tr>
            </table>
		</div>

        <div id="jour">
		<h2>

			MOYENNE DE TEMPÉRATURE HEBDOMADAIRE 


		</h2>
            <table>
                <caption>Température</caption>
                <tr>
                    <?php
                    include "../Controleur/BareSupTemp.php";
                    ?>
                </tr>
                <tr>
                    <?php
                    include "../Controleur/BareInfTemp.php";
                    ?>
                </tr>
            </table>
		</div>

            </div>

        <div id="jour">
		<h2>
			MOYENNE TEMPÉRATURE MENSUELLE
        </h2>
            <table>
                <caption>Température</caption>
                <tr>
                    <?php
                    include "../Controleur/BareSupTemp.php";
                    ?>
                </tr>
                <tr>
                    <?php
                    include "../Controleur/BareInfTemp.php";
                    ?>
                </tr>
            </table>
		</div>


	</div>

</div>

<?php
include '../Vue/footer.html';
?>
</body>
</html>
