<?php 

function suprime()
{
	if (!empty($_POST['deco']))
	 {
		session_destroy();
		header("location:accueil.php");
	
	}
	
}


?>