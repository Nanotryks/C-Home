<!DOCTYPE html>

<html >
<head>
  <meta charset="UTF-8">
  <title>Lire les conditions générales d'utilisation</title>

      <link rel="stylesheet" href="../CSS/cond_gen.css">

  
</head>

<body>
  <div class="logo"><img src="../Image/LOGO11-3.png" width="400" height="150" alt="logo de mon site" title="mon logo"/></div>
    <form action="../Controleur/condgen.php" method="post">
        <div class="enveloppe">		
            <?php
 include('../Modele/Connexion.php');
    $reponse = $BDD->query('SELECT * FROM conditions_d_utilisation');
//    ORDER BY IdUtilisateur DESC LIMIT 1 ');
    $donnees = $reponse->fetch();

          echo $donnees['text'];
    ?>
  
  
</body>
</html>
