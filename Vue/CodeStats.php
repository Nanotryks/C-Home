<?php
include '../Vue/header.html';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

      <link rel="stylesheet" href=" ../CSS/Statistiques.css"/>

    <title>Statistiques</title>

    <script type="text/javascript" src="../Js/scroll.js"></script>
</head>
<body>

<h2> Bilan </h2>
<div class="bilan">
<?php
include '../Controleur/StatsCible.php';

?>
</div>

<h2> Historique des températures </h2>
<div class="température">
    <table>
        <tr>
            <th>Date</th>
            <th>Heure</th>
            <th>Valeur (en °C) </th>
        </tr>
        <?php
        include '../Controleur/ListeStats.php';
        ?>
    </table>
</div>

<h2> Historique des niveaux de luminosité </h2>
<div class="lumière">

<table>
    <tr>
        <th>Date</th>
        <th>Heure</th>
        <th>Valeur (en Lux)</th>
    </tr>
    <?php
    include '../Controleur/ListeStats2.php';
    ?>
</table>
</div>


<?php include '../Vue/footer.html';
?>


</body>
</html>
