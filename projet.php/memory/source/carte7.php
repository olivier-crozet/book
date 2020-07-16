<?php
session_start();
include ('class_ocbis.php');
if (!isset($_SESSION['carte_decouverte7']) OR $_SESSION['carte_decouverte7'] = NULL )
 {
$_SESSION['carte_decouverte7'] = $_SESSION['im7'];//carte melangers

 $_SESSION['im7_numero_paire7'] = 7 ;
	 //insertion du liens cliqué//
      inserliens($_SESSION['carte_decouverte7'],$_SESSION['im7_numero_paire7']);
}
header('Location:jeux.php?');