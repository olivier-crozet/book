<?php
session_start();

 if (!isset($_SESSION['im1pass'])) 
 {     

 	include('class_oc.php');
 	 //insertion du liens cliqué//
 	  $_SESSION['im1pass'] = $_SESSION['im1'];
 	  
 	 $_SESSION['im1_numero_paire'] = 1 ;
         $liensinserer = new insertionliens();
        $liensinserer ->inserliens($_SESSION['im1'],$_SESSION['im1_numero_paire']);

        ///////verifif si les paire corresponde///////////
        $image0 = $_SESSION['im0'];
        $paire1 = new paire();
        $paire1 -> verifi_la_paire($image0);

 
 }


	
	
	
 //  header('Location:jeux.php?');
?>