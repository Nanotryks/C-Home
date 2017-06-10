<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 10/06/2017
 * Time: 18:47
 */
include '../Modele/Connexion.php';
$mail=$_GET["q"];
$reponse=$BDD->query('SELECT QuestionSecrete FROM utilisateur WHERE mail="'.$mail.'"');
if($reponse)
{
   while($donnees=$reponse->fetch())
   {
       switch ($donnees['QuestionSecrete'])
       {
           case 'Couleur' :
           {

               echo '<label id="question">Quelle est votre couleur préférée ?</label><br>';
               echo '<input type="text" name="reponse"><br>';

           }break;

           case 'Ville' :
           {

               echo '<label id="question">Quelle est votre ville favorite ?</label><br>';
               echo '<input type="text" name="reponse"><br>';

           }break;

           case 'Animal' :
           {

               echo '<label id="question">Quelle est le nom de votre premier animal domestique ?</label><br>';
               echo '<input type="text" name="reponse"><br>';

           }break;

           case 'Nom' :
           {

               echo '<label id="question">Quelle est le nom de jeune fille de votre mère ?</label><br>';
               echo '<input type="text" name="reponse"><br>';

           }break;

           case 'Ecole' :
           {

               echo '<label id="question">Quelle est le nom de votre institutrice de maternelle ?</label><br>';
               echo '<input type="text" name="reponse"><br>';

           }break;
       }
   }


}
