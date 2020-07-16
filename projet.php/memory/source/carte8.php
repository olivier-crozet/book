<?php
session_start();
include ('class_ocbis.php');
if (!isset($_SESSION['carte_decouverte8']) OR $_SESSION['carte_decouverte8'] = NULL )
 {
$_SESSION['carte_decouverte8'] = $_SESSION['im8'];//carte melangers

 $_SESSION['im8_numero_paire8'] = 8 ;
	 //insertion du liens cliqué//
      inserliens($_SESSION['carte_decouverte8'],$_SESSION['im8_numero_paire8']);
}
header('Location:jeux.php?');