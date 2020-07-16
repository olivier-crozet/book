<?php
session_start();
include ('class_ocbis.php');
if (!isset($_SESSION['carte_decouverte2']) OR $_SESSION['carte_decouverte2'] = NULL )
 {
	$_SESSION['carte_decouverte2'] = $_SESSION['im2'];

$_SESSION['im2_numero_paire2'] = 2 ;
	 //insertion du liens cliqué//
        inserliens($_SESSION['im2'],$_SESSION['im2_numero_paire2']);
}



header('Location:jeux.php?');
?>