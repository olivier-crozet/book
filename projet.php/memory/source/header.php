<?php
session_start();
?>

<!DOCTYPE html>


<header class="oc_header">

	<ul class="ul_header">
		<a class="oc_a_header" href="accueil.php"><li>acceuil</li></a>
		<?php
	if (isset($_SESSION['id']))
		{ ?>
		<a class="oc_a_header" href="profil.php"><li>profil</li></a>
		<a class="oc_a_header" href="jeux.php"><li>jouer maintenent</li></a>
	<?php	}
	else 
		{ ?>
		<a class="oc_a_header" href="inscription.php"><li>inscription</li></a>
		<a class="oc_a_header" href="connexion.php"><li>connexion</li></a>
	<?php } 	?>
	<form class="oc_bouton_deco" method="post" action="">
		<input class="oc_bouton_deco" type="submit" name="deco" value="deconnexion">
	</form>
	<?php
	if (isset($_POST['deco'])) 
	{
		$connexion=mysqli_connect("localhost","root","","memory");
		$requette_de_supression = "DELETE  FROM jeux ;";
		$supression_de_la_bdd = mysqli_query($connexion,$requette_de_supression);
		$requette_de_supression_parti = "DELETE  FROM point_parti ;";
		$supression_de_la_bdd_parti = mysqli_query($connexion,$requette_de_supression_parti);

		$_SESSION['melanger'] = 0;
		unset($_SESSION['id']);
		unset($_SESSION['login']);
		unset($_SESSION['img1']);
		unset($_SESSION['img2']);
		session_destroy();
	}
	?>
</ul>
</header>

</html>
