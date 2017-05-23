<!DOCTYPE html>
<!--Page d'index du site de domisep
APP G8C ISEP 
-- Cheikhouna LO--->

<html >
<head>
  <meta charset="UTF-8">
  <title>Interface d'identification de domIsep</title>

      <link rel="stylesheet" href="../CSS/style.css">

  
</head>

<body>
  <div class="logo"><img src="../Image/LOGO11-3.png" width="400" height="150" alt="logo de mon site" title="mon logo"/></div>
  <div class="enveloppe">
	<div class="login">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">se connecter</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">s'inscrire</label>
		<div class="forme">
			<div class="sign-in-lo">
            <form action="../Controleur/connexion.php" method="post">

				<div class="group">
					<label for="user" class="label">Identifiant DOMISEP</label>
					<input id="user" name="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Mot de passe</label>
					<input id="pass" name="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Garder ma session active</label>
				</div>
				<div class="group">
					<input type="submit" class="bouton" value="CONNEXION">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#">MOT DE PASSE OUBLIE?</a>
				</div><br/>
                <div class="foot-lnk">
					<a href="#">BESOIN D'AIDE ? </a>
				</div>   
                </form>
			</div>
			<div class="sign-up-lo">
                <form action="../Controleur/inscription.php" method="post">
				<div class="group">
					<label for="user" class="label">IDENTIFIANT DOMISEP</label>
					<input id="user" name="user" type="text" class="input">
				</div>
                <div class="group">
					<label for="pass" class="label">Prenom</label>
					<input id="pass" name="prenom" type="text" class="input">
				</div>
                <div class="group">
					<label for="pass" class="label">NOM</label>
					<input id="pass" name="nom" type="text" class="input">
				</div>
                <div class="group">
					<label for="pass" class="label">adresse email</label>
					<input id="pass" name="email" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">MOT DE PASSE</label>
					<input id="pass" name="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Telephone</label>
					<input id="pass" name="telephone" type="text" class="input">
				</div>
				<div class="group">
					<input type="submit" class="bouton" value="s'inscrire">
				</div>
				<div class="hr"></div>
                </form>
            </div>
		</div>
	</div>
</div>
  
  
</body>
</html>
