<?php

require "class-justine.php";
$var = new user;

?>


<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../style/header.css">
	<link rel="stylesheet" type="text/css" href="../style/profil.css">
<meta charset="UTF-8">
<title>Document sans titre</title>
</head>

<body>
	<header>
	<?php	include "header.php"; ?>
	</header>
	<h1 class="oc-h1-profil">Profil</h1>
	<form class="oc-form-profil" method="post">
		<section>
		<?php $var->updatelogin();?>
		<h1 class="modifier">Modifier mon identifiant</h1>
		<label>
			<input type="text" name="login2" class="largeur" id="login" placeholder="Nouvel identifiant*" required/><br/>
		</label>
		<label>
			<input type="password" name="motdepasse" class="largeur" id="motdepasse" placeholder="Mot de passe*" required/><br/>
		</label>
		<label>
	  		<input type="submit" name="submit2" id="bouton" value="Valider" />
	 	</label>
	</form>
	</section>
	
	<section>
	<?php $var->updatepassword();?>
	<form class="oc-form-profil" method="post">
		<h1 class="modifier">Modifier mon mot de passe</h1>
		<label>
			<input type="password" name="ancienmotdepasse" class="largeur" id="ancienmotdepasse" placeholder="Ancien mot de passe*" required/><br/>
		</label>
		<label>
			<input type="password" name="nouveaumotdepasse" class="largeur" id="nouveaumotdepasse" placeholder="Nouveau mot de passe*" required/><br/>
		</label>
		<label>
	  		<input type="submit" name="submit3" id="bouton" value="Valider" />
	 	</label>
	</form>
	</section>
</body>
</html>