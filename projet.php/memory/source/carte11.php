<?php
session_start();
include ('class_ocbis.php');
if (!isset($_SESSION['carte_decouverte11']) OR $_SESSION['carte_decouverte11'] = NULL )
 {
$_SESSION['carte_decouverte11'] = $_SESSION['im11'];//carte melangers

 $_SESSION['im11_numero_paire11'] = 11 ;
	 //insertion du liens cliqué//
      inserliens($_SESSION['carte_decouverte11'],$_SESSION['im11_numero_paire11']);
}
header('Location:jeux.php?');