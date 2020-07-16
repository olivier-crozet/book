<?php
session_start();
include ('class_ocbis.php');
if (!isset($_SESSION['carte_decouverte6']) OR $_SESSION['carte_decouverte6'] = NULL )
 {
$_SESSION['carte_decouverte6'] = $_SESSION['im6'];//carte melangers

 $_SESSION['im6_numero_paire6'] = 6 ;
	 //insertion du liens cliqué//
      inserliens($_SESSION['carte_decouverte6'],$_SESSION['im6_numero_paire6']);
}
header('Location:jeux.php?');