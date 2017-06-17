<?php
include '../Modele/Connexion.php';
session_start();
$reponse = $BDD->query('SELECT Nom,IdMaison FROM Maison WHERE IdUtilisateur="'.$_SESSION['IdUtilisateur'].'" ');
$donnees4=0;
$i=0;
while($donnees = $reponse->fetch())
{
    $donnees2=$donnees['Nom'];
    $donnees3=$donnees['IdMaison'];
    echo "<option name='$donnees2' value='$donnees3'>".$donnees['Nom']."</option>";
    if($i==0)
    {
        $donnees4=$donnees['IdMaison'];
    }
    $i++;
}
?>
</SELECT>
    </br>
    </br>
            <div id="Capteur">
                <?php
                $reponse = $BDD->query('SELECT IdPiece FROM piece WHERE IdMaison="'.$donnees4.'"');
                $table=0;
                //$i=0;
                $entree=0;
                while($donnees = $reponse->fetch())
                {
                    $reponse2=$BDD->query('SELECT Valeur FROM capteur WHERE IdPiece="'.$donnees['IdPiece'].'" and Nom="Fenêtre" ');
                    while($donnees2 = $reponse2->fetch())
                    {
                        $table = $table + $donnees2['Valeur'];
                        //$i++;
                    }
                    $reponse3=$BDD->query('SELECT Valeur FROM capteur WHERE IdPiece="'.$donnees['IdPiece'].'" and Nom="Porte d\'entrée" ');
                    while($donnees3 = $reponse3->fetch())
                    {
                        $entree = $entree + $donnees3['Valeur'];
                    }
                }

                if($table!=0)
                {
                    echo "Une fenêtre est ouverte dans votre maison";
                }
                else
                {
                    echo "Toutes les fenêtres sont fermées dans votre maison ";
                }
                ?>
                </br>
                </br>
                <?php
                if($entree!=0)
                {
                    echo "La porte d'entrée est ouverte dans votre maison";
                }
                else
                {
                    echo "La porte d'entrée est fermée dans votre maison";
                }
                ?>
            </div>

