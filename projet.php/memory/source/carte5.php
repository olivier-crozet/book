<?php
session_start();
include ('class_ocbis.php');
if (!isset($_SESSION['carte_decouverte5']) OR $_SESSION['carte_decouverte5'] = NULL )
 {
$_SESSION['carte_decouverte5'] = $_SESSION['im5'];//carte melangers

 $_SESSION['im5_numero_paire5'] = 5 ;
	 //insertion du liens cliqué//
      inserliens($_SESSION['carte_decouverte5'],$_SESSION['im5_numero_paire5']);
}
header('Location:jeux.php?');