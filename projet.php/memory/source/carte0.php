<?php
session_start();
include ('class_ocbis.php');
if (!isset($_SESSION['carte_decouverte0']) OR $_SESSION['carte_decouverte0'] = NULL )
 {
$_SESSION['carte_decouverte0'] = $_SESSION['im0'];//carte melangers

 $_SESSION['im0_numero_paire0'] = 0 ;
	 //insertion du liens cliqué//
      inserliens($_SESSION['carte_decouverte0'],$_SESSION['im0_numero_paire0']);
}
header('Location:jeux.php?');

//////////////////////////////////////////////////////fonction///////////////////////////////////////

?>