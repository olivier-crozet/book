<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Demander de l'aide</title>
	<link rel="stylesheet" type="text/css" href="../css/connexion.css">
     <link rel="stylesheet" type="text/css" href="../css/accueil.css">
    <link rel="icon" type="image/png" href="../pics/icon/jeMePropose.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>
<body  class="oc-body-connexion">
<section class="oc-section-connexion">

<div class="header-logo-title">
            <img src="../pics/icon/jeMePropose.png" alt="je me propose logo" title="Site d'entraide">
            <h1>Je-me-propose.com</h1>
        </div>

        <header class="block-accueil">
            <?php include "../source/header.php";  ?>

        </header>



<?php	
$adresse_serv ="localhost";
$nom_serv ="root";
$mdp_serv ="";
$bdd_serv ="je_me_propose";
// --------------------------------------------DEBUT PHP--------------------------------------------
if(!isset($_SESSION['id']))
{

if((isset($_POST['Valider']))&&(isset($_POST['champ1']))&&(isset($_POST['champ2'])))
{
$connexion = mysqli_connect($adresse_serv,$nom_serv,$mdp_serv,$bdd_serv);
	$login=$_POST['champ1'];
	$query="SELECT *from utilisateurs WHERE login='$login'";
	$result= mysqli_query($connexion, $query);
	$row = mysqli_fetch_array($result);

	
	if(password_verify($_POST['champ2'],$row['password'])) 
	{
	
	$_SESSION['login'] =htmlspecialchars($_POST['champ1']);;
	$_SESSION['id'] = $row['id'];
	header('location: accueil.php');
}
	else
	{	
	?>
	<div class="erreur">
	<img src="../img/erreur.jpg" width="2%">
	<div class="affichage">
	<?php
	echo "*Login ou mot de passe incorrect";	
	?>
	</div>
	</div>
	<?php
	}
}

// --------------------------------------------FIN PHP--------------------------------------------
?>
	
<section>
	<div class="form-style-5">
		<form method="post" action="connexion.php">
		<fieldset>
		<legend>Connexion</legend>	
		<div class="input">
		<input type="text" name="champ1" placeholder="Login *">
		</div>
		<div class="input">
		<input type="password" name="champ2" placeholder="Password *">
		</div>
		<div class="input">
		<input type="submit" name="Valider" value="SE CONNECTER"/>
		</div>
		</fieldset>
		</form>
	</div>
</section>				

<?php
}
else
{
//header("location: accueil.php");
}
?>	

</section>
</body>

  <footer class="block-accueil">
            <ul>
                <li><a href="infos.php">accueil</a></li>
                <li><a href="">connexion</a></li>
                <li><a href="">inscription</a></li>
                <li><a href="">informations</a></li>
                <li><a href="">contact</a></li>
            </ul>
        </footer>
</html>