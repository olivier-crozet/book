<?php
session_start();
include ('class_ocbis.php');
if (!isset($_SESSION['carte_decouverte3']) OR $_SESSION['carte_decouverte3'] = NULL )
 {
$_SESSION['carte_decouverte3'] = $_SESSION['im3'];//carte melangers

 $_SESSION['im3_numero_paire3'] = 3 ;
	 //insertion du liens cliqué//
      inserliens($_SESSION['carte_decouverte3'],$_SESSION['im3_numero_paire3']);
}
header('Location:jeux.php?');

//////////////////////////////////////////////////////fonction///////////////////////////////////////

?>