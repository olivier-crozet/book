<?php
session_start();
include ('class_ocbis.php');

if (!isset($_SESSION['carte_decouverte1']) OR $_SESSION['carte_decouverte1'] = NULL )
 {
  $_SESSION['carte_decouverte1'] = $_SESSION['im1'];

$_SESSION['im1_numero_paire1'] = 1 ;
	 //insertion du liens cliqué//
       inserliens($_SESSION['carte_decouverte1'],$_SESSION['im1_numero_paire1']);

}


   header('Location:jeux.php?');
   
?>