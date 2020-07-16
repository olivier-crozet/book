<?php 

function bbd_conect()
{
  //$connexion
   return mysqli_connect("localhost","root","","je_me_propose");
//   return mysqli_connect("localhost","olivier-crozet","M3Hfz4H8","olivier-crozet_je_me_propose");
}

function recherche()
{
	if (isset($_POST['validation_help']))
	 {
	 	$region = $_POST['Region'];
	 	//date actuel
	 	$datetoday = date("Y-m-d H:i:s");
	 	//date actuel en timestamp
	 	$de = date("Y-m-d");
	 	$today = strtotime($datetoday);
	 	//heure par valeur
	 	$heure =$_POST['Heure_dispo'];
	 	//conversion de l'heure en timestamp
	 	$date = $_POST['Date_dispo'];
	 	$datestamp = strtotime($date);
	 	//connexion bdd
	 	$connexion = bbd_conect();
	 	//requette joignan le deux table
	 	$da = date('y,m,d');
	 	//requette des disponibilité
	 	$requette_cherche ="SELECT * FROM dispo inner JOIN utilisateurs ON dispo.id_user = utilisateurs.id WHERE dispo.region ='$region' AND dispo.date_dispo  <= '$date'";   
	 	$fusion_requette_cherche =mysqli_query($connexion,$requette_cherche);
	 	//metre tous les resultat dans un tableau
	 	$result = mysqli_fetch_all($fusion_requette_cherche);
	 	//nombre de resultat bdd
	 	$compte = mysqli_num_rows($fusion_requette_cherche);
	 	/////////affichage des donner
	 	
	 	for ($i=0; $i < $compte ; $i++) 
	 	{ 
	 		echo "<tr><td>".$result[$i][8]."</td><td>".$result[$i][10]."</td><td>",$result[$i][11]."</td><td>",$result[$i][14]."</td><td>",$result[$i][13]."</td><td>",$result[$i][12]."</td><td>",$result[$i][3]."</td><td>".$result[$i][4]."</td><td>",$result[$i][5]."</td></tr>";	
	 	}
	}
}

//////////////securise la page//////////

function securiter()
{
	if (!isset($_SESSION['id'])) 
	{
		header("location: connexion.php");	 
	}
}
?>