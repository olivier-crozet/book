<?php
session_start();
include ('class_ocbis.php');
if (!isset($_SESSION['carte_decouverte10']) OR $_SESSION['carte_decouverte10'] = NULL )
 {
$_SESSION['carte_decouverte10'] = $_SESSION['im10'];//carte melangers

 $_SESSION['im10_numero_paire10'] = 10 ;
	 //insertion du liens cliqué//
      inserliens($_SESSION['carte_decouverte10'],$_SESSION['im10_numero_paire10']);
}
header('Location:jeux.php?');