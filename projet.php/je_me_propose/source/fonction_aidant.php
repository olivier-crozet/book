<?php

function bbd_conect()
{
  //$connexion
   return mysqli_connect("localhost","root","","je_me_propose");
}

//////////////FONCTION DE SECURITER (peut etre amelioré avec une requette)
function securiter()
{
	if (!isset($_SESSION['id'])) 
	{
		header("location: connexion.php");	 
	}
}

///insert les infos dans la bdd dispo
function insertion_aidant()
{ //si il clique sur le boutton
	if (isset($_POST['validation_dispo'])) 
	{    //si tous les champs sont rempli
		if (!empty($_POST["Region"]) && !empty($_POST['Date_dispo']) && !empty($_POST['heure_dispo']) && !empty($_POST['raison'])) {
			   if (strlen($_POST['raison']) < 500) 
			   {
			   	$id = $_SESSION['id'];
			   	$region = $_POST['Region'];
			   	$date =  $_POST['Date_dispo'];
			   	$heure = $_POST['heure_dispo'];
			   	//recuperation du time stamp de la date
			   	$datest = strtotime($date);

			   	$description = htmlspecialchars($_POST['raison']);
			   	//////////////connexion bdd
			   	$connexion = bbd_conect();
			   	$requette_insretion_bdd_dispo = " INSERT INTO dispo (id_user,region,date_dispo,heure_dispo,description,date_st) VALUES ($id,'$region','$date',$heure,'$description',$datest)"	;
			   	$execution = mysqli_query($connexion,$requette_insretion_bdd_dispo);
			echo "Merci";
			//   	header("location:profil.php");		
			   }
			   else
			   {
			   	echo "le message doit comprendre moins de 500 caracteres !";
			   }



		    }
		    else
		    {
		    	echo "veuillez remplir tous les champs !";
		    }
	}
}




///////////////////::::autre fonction//////////////////////////////////////////////////////////////////////////////
//select login
function ecrire_login_by_id()
{
	
$id = $_SESSION['id'];
//connexion bdd
 $connexion = bbd_conect();
 $requette_select_login = "SELECT login FROM utilisateurs where id =$id ";
 $fusion_requette_select_login = mysqli_query($connexion,$requette_select_login);
 $login = mysqli_fetch_assoc($fusion_requette_select_login);
echo $login['login'];
}




?>






