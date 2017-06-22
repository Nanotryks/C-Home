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


<div class="bilan">
<?php
include '../Controleur/StatsCible.php';

?>
</div>

<div class="température">
    <table>
        <tr>
            <th>Date</th>
            <th>Heure</th>
            <th>Valeur (en °C) </th>
        </tr>
        <?php
        echo 'Historique des températures';
        include '../Controleur/ListeStats.php';
        ?>
    </table>
</div>

<div class="lumière">
<table>
    <tr>
        <th>Date</th>
        <th>Heure</th>
        <th>Valeur (en Lux)</th>
    </tr>
    <?php
    echo 'Historique des niveaux de lumière';
    include '../Controleur/ListeStats2.php';
    ?>
</table>
</div>


<?include '../Vue/footer.html';
?>


</body>
</html>
