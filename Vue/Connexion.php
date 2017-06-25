<!DOCTYPE html>
<!--Page d'index du site de domisep
APP G8C ISEP 
-- Cheikhouna LO--->

<html >
<head>
  <meta charset="UTF-8">
  <title>Interface d'identification de domIsep</title>

      <link rel="stylesheet" href="../CSS/style.css">
    <link rel="icon" href="../Image/Logopic.ico">
    <script type="text/javascript" src="../Js/VerifCaractere.js"></script>

  
</head>

<body>
  <div class="logo"><img src="../Image/LOGO11-3.png" width="400" height="150" alt="logo de mon site" title="mon logo"/></div>
  <div class="enveloppe">
	<div class="login">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">se connecter</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">s'inscrire</label>
		<div class="forme">
			<div class="sign-in-lo">

<!--                form avec la connexion-->

            <form action="../Controleur/connexion.php" method="post">

				<div class="group">
					<label for="user" class="label">Identifiant DOMISEP</label>
					<input id="user" name="user" type="text" class="input" required onkeyup="verif3(this)">
				</div>
				<div class="group">
					<label for="pass" class="label">Mot de passe</label>
					<input id="pass" name="pass" type="password" class="input" data-type="password" required>
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked >
					<label for="check"><span class="icon"></span> Garder ma session active</label>
				</div>
				<div class="group">
					<input type="submit" class="bouton" value="CONNEXION">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="../Vue/MotDePasseOublie.html">MOT DE PASSE OUBLIE?</a>
				</div><br/>
                <div class="foot-lnk">
					<a href="Aide.html">BESOIN D'AIDE ? </a>
				</div>   
                </form>
			</div>
			<div class="sign-up-lo">

<!--                form inscription-->
                <form action="../Controleur/inscription.php" method="post">
				<div class="group">
					<label for="user" class="label">IDENTIFIANT DOMISEP</label>
					<input id="user" name="user" type="text" class="input" required onkeyup="verif2(this)">
				</div>
                <div class="group">
					<label for="pass" class="label">Prenom</label>
					<input id="pass" name="prenom" type="text" class="input" required onkeyup="verif4(this)">
				</div>
                <div class="group">
					<label for="pass" class="label">NOM</label>
					<input id="pass" name="nom" type="text" class="input" required onkeyup="verif4(this)">
				</div>
                <div class="group">
					<label for="pass" class="label">adresse email</label>
					<input id="pass" name="email" type="email" class="input" required>
				</div>
				<div class="group">
					<label for="pass" class="label">MOT DE PASSE</label>
					<input id="pass" name="pass" type="password" class="input" data-type="password" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Telephone</label>
					<input id="pass" name="telephone" type="text" class="input" required minlength="10" maxlength="10" onkeyup="verif2(this)">
				</div>
                    <div id="Question" class="group">
                        <label for="question" class="label">Question secrète</label><br>
                        <select name="Select">
                            <option selected="selected">Sélectionnez une question</option>
                            <option name="Couleur" value="Couleur">Quelle est votre couleur préférée ?</option>
                            <option name="Ville" value="Ville">Quelle est votre ville favorite ?</option>
                            <option name="Animal" value="Animal">Quelle est le nom de votre premier animal domestique ?</option>
                            <option name="Nom" value="Nom">Quelle est le nom de jeune fille de votre mère ?</option>
                            <option name="Ecole" value="ecole">Quelle est le nom de votre institutrice de maternelle ?</option>
                        </select>
                    </br>
                        </br>
                        <label for="reponse" class="label">Votre réponse secrète</label>
                        <input class ="input" type="text" name="reponse" required onkeyup="verif4(this)">
                    </div>
                <div class="group">
                    <input id="check" type="checkbox" class="check" checked>
					<label for="check">
                        <span class="icon"></span> <a href="cond_gen.php">Accepter les conditions générales d'utilisation</a></label>
                    </div>
                    </br>
				<div class="group">
					<input type="submit" class="bouton" value="s'inscrire">
				</div>
				<div class="hr"></div>
                </form>
            </div>
		</div>
	</div>
</div>

  <script>
      function verif3(chars) {
          // Caractères autorisés
          var regex = new RegExp("[a-zA-Z0-9ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ_-'\\s]", "i");
          var valid;
          for (x = 0; x < chars.value.length; x++) {
              valid = regex.test(chars.value.charAt(x));
              if (valid == false) {
                  chars.value = chars.value.substr(0, x) + chars.value.substr(x + 1, chars.value.length - x + 1); x--;
              }
          }
      }

      function verif4(chars) {
          // Caractères autorisés
          var regex = new RegExp("[A-Za-ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ'-\\s]", "i");
          var valid;
          for (x = 0; x < chars.value.length; x++) {
              valid = regex.test(chars.value.charAt(x));
              if (valid == false) {
                  chars.value = chars.value.substr(0, x) + chars.value.substr(x + 1, chars.value.length - x + 1); x--;
              }
          }
      }
  </script>

</body>
</html>
