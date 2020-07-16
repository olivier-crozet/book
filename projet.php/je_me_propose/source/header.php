<?php
session_start();

include("fonction_oc.php");
?>



	<a href="accueil.php">accueil</a>
	<a href="infos.php">infos</a>
	<?php 
	if (!empty($_SESSION['id']))
	 { ?>
	 	<a href="profil.php">profil</a>
	 	<a href="proposer_son_aide.php">aider</a>
	 	<a href="demander_aide.php">besoin d'aide</a>
<?php } 
	else
	{ ?>
		<a href="inscription.php">inscription</a>
		<a href="connexion.php">connexion</a>
<?php }

	?>
	<a href="contact.php">contact</a>
	<form action="" method="post">
	<input type="submit" name="deco" value="déconnection"> 
	<?php suprime() ?>
	</form>
