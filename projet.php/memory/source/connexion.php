<?php
require "class-justine.php";
include "header.php"; 
$var = new user;

	$var->connect();

?>

<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../style/header.css">
	<link rel="stylesheet" type="text/css" href="../style/connexion.css">
<meta charset="UTF-8">
<title>Document sans titre</title>
</head>

<body>
	<header>
	
	</header>
	<h1 class="oc-h1-connexion">Connexion</h1>
		<form class="oc-form-connexion" method="post" action="connexion.php" class="formulairepages">
			
			<label for="login">Login</label>
			<input class="inputlog" type="text" name="login" class="largeur" placeholder="Login" required/></br></br>
			<label for="password"> Mot de passe</label>
			<input type="password" name="password" class="largeur" placeholder="Mot de passe" required/></br></br>
			<input type="submit" id="bouton6" name="valider"/>
		</form>
		<?php if (isset($_SESSION['id'])) 
		{
			echo "<p class='oc-p-connexion'>Vous etes connecté a vous de jouer</p>";
		}
		else
		 {
		 echo	"<p class='oc-p-connexion'>connecté vous !</p>";
		 } ?>
	</br></br>

</body>
</html>