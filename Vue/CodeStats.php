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
  <?php
  echo 'Historique des température';
  include '../Controleur/ListeStats.php';?>
</div>


<?include '../Vue/footer.html';
?>


</body>
</html>
