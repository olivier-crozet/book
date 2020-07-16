<?php
session_start();
 
include('class_oc.php');
	 $_SESSION['im0pass'] = $_SESSION['im0'];

	  $_SESSION['im0_numero_paire'] = 0 ;
	  //insertion du liens cliqué//
    $liensinserer = new insertionliens();
    $liensinserer ->inserliens($_SESSION['im0'],$_SESSION['im0_numero_paire']);



   header('Location:jeux.php?');
?>