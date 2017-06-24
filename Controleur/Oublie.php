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
$i=0;

   while($donnees=$reponse->fetch())
   {
       if($i==0){
           switch ($donnees['QuestionSecrete'])
           {
               case 'Couleur' :
               {

                   echo '<label for="couleur" class="label" id="question">Quelle est votre couleur préférée ?</label><br>';
                   echo '<input type="text" name="reponse" class="input" onkeyup="verif(this)"><br>';

               }break;

               case 'Ville' :
               {

                   echo '<label for="ville" class="label" id="question">Quelle est votre ville favorite ?</label><br>';
                   echo '<input type="text" name="reponse" class="input" onkeyup="verif(this)"><br>';

               }break;

               case 'Animal' :
               {

                   echo '<label for="animal" class="label" id="question">Quelle est le nom de votre premier animal domestique ?</label><br>';
                   echo '<input type="text" name="reponse" class="input" onkeyup="verif(this)"><br>';

               }break;

               case 'Nom' :
               {

                   echo '<label for="mere" class="label"  id="question">Quelle est le nom de jeune fille de votre mère ?</label><br>';
                   echo '<input type="text" name="reponse" class="input" onkeyup="verif(this)"><br>';

               }break;

               case 'Ecole' :
               {

                   echo '<label for="teacher" class="label" id="question">Quelle est le nom de votre institutrice de maternelle ?</label><br>';
                   echo '<input type="text" name="reponse" class="input" onkeyup="verif(this)"><br>';

               }break;


           }
       }

       $i++;
   }

if ($i==0)
{
    echo "<label class='label' id='erreur' id='question'>Mail érroné</label>";
}

