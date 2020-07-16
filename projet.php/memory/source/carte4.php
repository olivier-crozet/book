<?php
session_start();
include ('class_ocbis.php');
if (!isset($_SESSION['carte_decouverte4']) OR $_SESSION['carte_decouverte4'] = NULL )
 {
$_SESSION['carte_decouverte4'] = $_SESSION['im4'];//carte melangers

 $_SESSION['im4_numero_paire4'] = 4 ;
	 //insertion du liens cliqué//
      inserliens($_SESSION['carte_decouverte4'],$_SESSION['im4_numero_paire4']);
}
header('Location:jeux.php?');