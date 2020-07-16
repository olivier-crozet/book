<?php
session_start();
include ('class_ocbis.php');
if (!isset($_SESSION['carte_decouverte9']) OR $_SESSION['carte_decouverte9'] = NULL )
 {
$_SESSION['carte_decouverte9'] = $_SESSION['im9'];//carte melangers

 $_SESSION['im9_numero_paire9'] = 9 ;
	 //insertion du liens cliqué//
      inserliens($_SESSION['carte_decouverte9'],$_SESSION['im9_numero_paire9']);
}
header('Location:jeux.php?');