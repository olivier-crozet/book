<?php
session_start();
include('class_oc.php');
	 $_SESSION['im2pass'] = $_SESSION['im2'];
 $_SESSION['im2_numero_paire'] = 2 ;
	 //insertion du liens cliqué//
         $liensinserer = new insertionliens();
        $liensinserer ->inserliens($_SESSION['im2'],$_SESSION['im2_numero_paire']);
   header('Location:jeux.php?');
   
?>