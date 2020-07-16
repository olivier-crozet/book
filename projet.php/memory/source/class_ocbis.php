<?php

function dbconnect()
{  //CHANGER LA CONNEXION LIGNE 392 a la main
     // return mysqli_connect("localhost","olivier-crozet","M3Hfz4H8","olivier-crozet_memory");
     
 
     // return $connexion;
      return mysqli_connect("localhost","root","","thalassante");
}

$adresse_serv ="localhost";
$nom_serv = "root";
$mdp_serv = "";
$bdd_serv ="thalassante";

function bouton_melange()
{
  if(isset($_POST['remelange']))
  {
    $_SESSION['melanger'] = 0;
    header('Location:jeux.php?');
   // $image = new image();
    //$image ->melange();
  }
}


/////////////////////////////////////////////melange niveau 1///////////////
 /**
   * levelone
   par olivier
   */
 /**
  * 
  */
 class image
 { 
  public $image0 = "";
  public $image1 = "";
  public $image2 = "";
  public $image3 = "";
  public $image4 = "";
  public $image5 = "";
   
   function melange()
   {
    $image0 = "../images/chat_louche.jpg";
   $image1 = "../images/singe.png";
   $image2 = "../images/selfchat.jpg";
   $image3 = "../images/chat_louche.jpg";
   $image4 = "../images/singe.png";
   $image5 = "../images/selfchat.jpg";
    
     $tableauImage1 = [$image0,$image1,$image2,$image3,$image4,$image5];

      srand((float)microtime()*1000000);
      //////////melange tableau ////////////////////////
      shuffle($tableauImage1);
      $nombrecolone = 6;
      ?>
      <table>
        <?php
        /////////////////compte du tableau ///////////////////////////
          $nb=count($tableauImage1);
          for ($i=0; $i < $nb ; $i++) 
          { 
            $image1 = $tableauImage1[$i];
          }
                  if ($i%$nombrecolone==0)
                {
                /////////////////////recupration d'une image ///////////
                   $imagemel0 = $tableauImage1[0] ;
                   $imagemel1 = $tableauImage1[1] ;
                   $imagemel2 = $tableauImage1[2] ;
                   $imagemel3 = $tableauImage1[3] ;
                   $imagemel4 = $tableauImage1[4] ;
                   $imagemel5 = $tableauImage1[5] ;

               
                  /////////enregistrement de limage en session////////////////
                   $_SESSION['im0'] = $imagemel0;
                   $_SESSION['im1'] = $imagemel1;
                   $_SESSION['im2'] = $imagemel2;
                   $_SESSION['im3'] = $imagemel3;
                   $_SESSION['im4'] = $imagemel4;
                   $_SESSION['im5'] = $imagemel5;

                   if (isset($_POST['melange']))
                    {
                   
                      $connexion = dbconnect();
                        $requette_de_supression = "DELETE  FROM jeux ;";
                        $supression_de_la_bdd = mysqli_query($connexion,$requette_de_supression);                    
                      $_SESSION['carte_decouverte0'] = NULL ;
                     
                   }
                  }
     ////////////////fermeture fonction/////////////////////////
   }
   ////////////////////fermeture class
 }

 ////////////////////fonction melange niveau 2/////////////////////////////////////////////////////////////////

 /**
   * level2
   par olivier
   */
 /**
  * 
  */
 class image_niveau2
 { 
  public $image0 = "";
  public $image1 = "";
  public $image2 = "";
  public $image3 = "";
  public $image4 = "";
  public $image5 = "";
  public $image6 = "";
  public $image7 = "";
  public $image8 = "";
  public $image9 = "";
  
   
   function melange2()
   {
    $image0 = "../images/chat_louche.jpg";
   $image1 = "../images/singe.png";
   $image2 = "../images/selfchat.jpg";
   $image3 = "../images/chat_louche.jpg";
   $image4 = "../images/singe.png";
   $image5 = "../images/selfchat.jpg";
   $image6 = "../images/hibijau.jpg";
   $image7 = "../images/hibijau.jpg";
   $image8 = "../images/chat_cramer.jpg";
   $image9 = "../images/chat_cramer.jpg";


     $tableauImage1 = [$image0,$image1,$image2,$image3,$image4,$image5,$image6,$image7,$image8,$image9];

      srand((float)microtime()*1000000);
      //////////melange tableau ////////////////////////
      shuffle($tableauImage1);
      $nombrecolone = 10;
      ?>
      <table>
        <?php
        /////////////////compte du tableau ///////////////////////////
          $nb=count($tableauImage1);
          for ($i=0; $i < $nb ; $i++) 
          { 
            $image1 = $tableauImage1[$i];
          }
                  if ($i%$nombrecolone==0)
                {
                /////////////////////recupration d'une image ///////////
                   $imagemel0 = $tableauImage1[0] ;
                   $imagemel1 = $tableauImage1[1] ;
                   $imagemel2 = $tableauImage1[2] ;
                   $imagemel3 = $tableauImage1[3] ;
                   $imagemel4 = $tableauImage1[4] ;
                   $imagemel5 = $tableauImage1[5] ;
                   $imagemel6 = $tableauImage1[6] ;
                   $imagemel7 = $tableauImage1[7] ;
                   $imagemel8 = $tableauImage1[8] ;
                   $imagemel9 = $tableauImage1[9] ;
                   

               
                  /////////enregistrement de limage en session////////////////
                   $_SESSION['im0'] = $imagemel0;
                   $_SESSION['im1'] = $imagemel1;
                   $_SESSION['im2'] = $imagemel2;
                   $_SESSION['im3'] = $imagemel3;
                   $_SESSION['im4'] = $imagemel4;
                   $_SESSION['im5'] = $imagemel5;
                   $_SESSION['im6'] = $imagemel6;
                   $_SESSION['im7'] = $imagemel7;
                   $_SESSION['im8'] = $imagemel8;
                   $_SESSION['im9'] = $imagemel9;

                   if (isset($_POST['melange']))
                    {
                        $connexion = dbconnect();
                        $requette_de_supression = "DELETE  FROM jeux ;";
                        $supression_de_la_bdd = mysqli_query($connexion,$requette_de_supression);                    
                        $_SESSION['carte_decouverte0'] = NULL ;

                   }
                  }
     ////////////////fermeture fonction/////////////////////////
   }
   ////////////////////fermeture class
 }


/////////////////////////////////////::melange niveau 3///////////////////////////////////////
  class image_niveau3
 { 
  public $image0 = "";
  public $image1 = "";
  public $image2 = "";
  public $image3 = "";
  public $image4 = "";
  public $image5 = "";
  public $image6 = "";
  public $image7 = "";
  public $image8 = "";
  public $image9 = "";
  public $image10 = "";
  public $image11 = "";
  
   
   function melange3()
   {
    $image0 = "../images/chat_louche.jpg";
   $image1 = "../images/singe.png";
   $image2 = "../images/selfchat.jpg";
   $image3 = "../images/chat_louche.jpg";
   $image4 = "../images/singe.png";
   $image5 = "../images/selfchat.jpg";
   $image6 = "../images/hibijau.jpg";
   $image7 = "../images/hibijau.jpg";
   $image8 = "../images/chat_cramer.jpg";
   $image9 = "../images/chat_cramer.jpg";
   $image10 = "../images/vache.jpg";
   $image11 = "../images/vache.jpg";


     $tableauImage1 = [$image0,$image1,$image2,$image3,$image4,$image5,$image6,$image7,$image8,$image9,$image10,$image11];

      srand((float)microtime()*1000000);
      //////////melange tableau ////////////////////////
      shuffle($tableauImage1);
      $nombrecolone = 12;
      ?>
      <table>
        <?php
        /////////////////compte du tableau ///////////////////////////
          $nb=count($tableauImage1);
          for ($i=0; $i < $nb ; $i++) 
          { 
            $image1 = $tableauImage1[$i];
          }
                  if ($i%$nombrecolone==0)
                {
                /////////////////////recupration d'une image ///////////
                   $imagemel0 = $tableauImage1[0] ;
                   $imagemel1 = $tableauImage1[1] ;
                   $imagemel2 = $tableauImage1[2] ;
                   $imagemel3 = $tableauImage1[3] ;
                   $imagemel4 = $tableauImage1[4] ;
                   $imagemel5 = $tableauImage1[5] ;
                   $imagemel6 = $tableauImage1[6] ;
                   $imagemel7 = $tableauImage1[7] ;
                   $imagemel8 = $tableauImage1[8] ;
                   $imagemel9 = $tableauImage1[9] ;
                   $imagemel10 = $tableauImage1[10] ;
                   $imagemel11 = $tableauImage1[11] ;
                   

               
                  /////////enregistrement de limage en session////////////////
                   $_SESSION['im0'] = $imagemel0;
                   $_SESSION['im1'] = $imagemel1;
                   $_SESSION['im2'] = $imagemel2;
                   $_SESSION['im3'] = $imagemel3;
                   $_SESSION['im4'] = $imagemel4;
                   $_SESSION['im5'] = $imagemel5;
                   $_SESSION['im6'] = $imagemel6;
                   $_SESSION['im7'] = $imagemel7;
                   $_SESSION['im8'] = $imagemel8;
                   $_SESSION['im9'] = $imagemel9;
                   $_SESSION['im10'] = $imagemel10;
                   $_SESSION['im11'] = $imagemel11;

                   if (isset($_POST['melange']))
                    {
                        $connexion = dbconnect();
                        $requette_de_supression = "DELETE  FROM jeux ;";
                        $supression_de_la_bdd = mysqli_query($connexion,$requette_de_supression);                    
                        $_SESSION['carte_decouverte0'] = NULL ;

                   }
                  }
     ////////////////fermeture fonction/////////////////////////
   }
   ////////////////////fermeture class
 }

////////////////////////////////// insertion bdd/////////////////////////////////////////////////////////////////

 /**
  * insertion repere image
  */
   function inserliens($liensimg,$numeropaire)
   {
        // $connexion = dbconnect();
         $connexion=mysqli_connect("localhost","root","","memory");
         $requette_inser_reper = "INSERT INTO jeux (liens, paire) VALUES ('$liensimg', '$numeropaire')";     
         $inserer = mysqli_query($connexion,$requette_inser_reper);
    }
//////////////////////////////////////////////////////fonction///////////////////////////////////////

/////////carte 1
 function affichage()
{
$connexion = dbconnect();
if (isset($_SESSION['carte_decouverte0']) ) //OR $_SESSION['carte_decouverte0'] != NULL 
		{
	     # code...
			 //////selectione les liens present dans la bdd////////
      frere($_SESSION['carte_decouverte0'],$_SESSION['im0_numero_paire0'],1);
    }
      else
      {
        echo "../images/doscarte.jpg";
      }     
}		
/////carte 2
 function affichage1()
{
$connexion = dbconnect();
if (isset($_SESSION['carte_decouverte1']) )
		{
	     # code...
			 //////selectione les liens present dans la bdd////////
    //MODIF VALEUR FOCTION
    frere($_SESSION['carte_decouverte1'],$_SESSION['im1_numero_paire1'],2);
    }
			else
			{
				echo "../images/doscarte.jpg";
			}			
}

//////////////////////carte 2
function affichage2()
{
$connexion = dbconnect();
if (!empty($_SESSION['carte_decouverte2']) )
		{
			 //////selectione les liens present dans la bdd////////
      frere($_SESSION['carte_decouverte2'],$_SESSION['im2_numero_paire2'],3);		
	}
		else
			{
				 echo "../images/doscarte.jpg";
			}
}

//carte 3
function affichage3()
{
$connexion = dbconnect();
if (!empty($_SESSION['carte_decouverte3']) )
    {
       //////selectione les liens present dans la bdd////////
      frere($_SESSION['carte_decouverte3'],$_SESSION['im3_numero_paire3'],4);   
  }
    else
      {
         echo "../images/doscarte.jpg";
      }
}

//carte 4
function affichage4()
{
$connexion = dbconnect();
if (!empty($_SESSION['carte_decouverte4']) )
    {
       //////selectione les liens present dans la bdd////////
      frere($_SESSION['carte_decouverte4'],$_SESSION['im4_numero_paire4'],5);   
  }
    else
      {
         echo "../images/doscarte.jpg";
      }
}

//carte 5 
function affichage5()
{
$connexion = dbconnect();
if (!empty($_SESSION['carte_decouverte5']) )
    {
       //////selectione les liens present dans la bdd////////
      frere($_SESSION['carte_decouverte5'],$_SESSION['im5_numero_paire5'],6);   
  }
    else
      {
         echo "../images/doscarte.jpg";
      }
}
////////CARTE NIVEAU 2//////

//carte 6 
function affichage6()
{
$connexion = dbconnect();
if (!empty($_SESSION['carte_decouverte6']) )
    {
       //////selectione les liens present dans la bdd////////
      frere($_SESSION['carte_decouverte6'],$_SESSION['im6_numero_paire6'],7);   
  }
    else
      {
         echo "../images/doscarte.jpg";
      }
}


//carte 7 
function affichage7()
{
$connexion = dbconnect();
if (!empty($_SESSION['carte_decouverte7']) )
    {
       //////selectione les liens present dans la bdd////////
      frere($_SESSION['carte_decouverte7'],$_SESSION['im7_numero_paire7'],8);   
  }
    else
      {
         echo "../images/doscarte.jpg";
      }
}

//carte 8
function affichage8()
{
$connexion = dbconnect();
if (!empty($_SESSION['carte_decouverte8']) )
    {
       //////selectione les liens present dans la bdd////////
      frere($_SESSION['carte_decouverte8'],$_SESSION['im8_numero_paire8'],9);   
  }
    else
      {
         echo "../images/doscarte.jpg";
      }
}

//carte 9 
function affichage9()
{
$connexion = dbconnect();
if (!empty($_SESSION['carte_decouverte9']) )
    {
       //////selectione les liens present dans la bdd////////
      frere($_SESSION['carte_decouverte9'],$_SESSION['im9_numero_paire9'],10);   
  }
    else
      {
         echo "../images/doscarte.jpg";
      }
}
//carte 10
function affichage10()
{
$connexion = dbconnect();
if (!empty($_SESSION['carte_decouverte10']) )
    {
       //////selectione les liens present dans la bdd////////
      frere($_SESSION['carte_decouverte10'],$_SESSION['im10_numero_paire10'],11);   
  }
    else
      {
         echo "../images/doscarte.jpg";
      }
}

//carte 11
function affichage11()
{
$connexion = dbconnect();
if (!empty($_SESSION['carte_decouverte11']) )
    {
       //////selectione les liens present dans la bdd////////
      frere($_SESSION['carte_decouverte11'],$_SESSION['im11_numero_paire11'],12);   
  }
    else
      {
         echo "../images/doscarte.jpg";
      }
}












/**
 * /////////////////////////////////supression deconnexion////////////////////
 */

  function suprime()
  {
    if(isset($_SESSION['carte_decouverte2']))
    {
    $_SESSION['carte_decouverte0'] = NULL ;
    $_SESSION['carte_decouverte1'] = NULL ;
    $_SESSION['carte_decouverte2'] = NULL ;
    }
    elseif (isset($_SESSION['carte_decouverte1']))
     {
      $_SESSION['carte_decouverte0'] = NULL ;
      $_SESSION['carte_decouverte1'] = NULL ;
     }
     elseif (isset($_SESSION['carte_decouverte0']))
      {
        $_SESSION['carte_decouverte0'] = NULL ;
      }
  }

//////////////////VERIF PAIRE////////////////////////
function frere($cartemelanger,$pair,$point)
{
  //recuperation du liens par la pair
        $connexion=mysqli_connect("localhost","root","","memory");
        $requettepaire = "SELECT liens FROM jeux WHERE paire = $pair";
        $fusionreq = mysqli_query($connexion,$requettepaire);
        $imbdd =mysqli_fetch_array($fusionreq);

   //recuperation du nombre de paire  par liens
       $connexion=mysqli_connect("localhost","root","","memory"); 
       $requettepaires = "SELECT * FROM jeux WHERE liens= '$cartemelanger'";
        $fusionreqs = mysqli_query($connexion,$requettepaires);
        $nbrpair = mysqli_num_rows($fusionreqs);

        $requette_total = "SELECT * FROM jeux ";
        $fusiontotal = mysqli_query($connexion,$requette_total);
        $totalimg = mysqli_num_rows($fusiontotal);
       nombre_de_point();
//si une seule carte a etait decouverte
  if ($totalimg == 1)
  {
    echo $cartemelanger;
  } //
       else if ( $_SESSION['nbrpoint'] == 0 && $totalimg <= 1)
       {   
         echo $cartemelanger;
       }
          else if($nbrpair == 2 && $totalimg == 2 OR $nbrpair == 2 && $totalimg == 4 OR $nbrpair == 2 && $totalimg == 6 OR $nbrpair == 2 && $totalimg == 8 OR $nbrpair == 2 && $totalimg == 10 OR $nbrpair == 2 && $totalimg == 12)
             {
              echo $cartemelanger;
              inser_point($point);
            } 
               elseif ($totalimg == 3 &&  $_SESSION['nbrpoint'] == 2 OR $totalimg == 5 &&  $_SESSION['nbrpoint'] == 6 OR $totalimg == 7 && $_SESSION['nbrpoint'] == 12  OR $totalimg == 9 && $_SESSION['nbrpoint'] == 20 OR $totalimg == 11 && $_SESSION['nbrpoint'] == 30)
               {
                echo $cartemelanger;

              }
          
              else
              {
                echo "../images/doscarte.jpg";
        //supression image bdd
                $connexion = dbconnect();
                $requette_de_supression = "DELETE  FROM jeux ;";    
                $supression_de_la_bdd = mysqli_query($connexion,$requette_de_supression);

        // supression des pint bdd
                  $requette_de_supression_point = "DELETE  FROM point_parti ;";    
                  $supression_de_la_bdd = mysqli_query($connexion,$requette_de_supression_point);                   
                  $_SESSION['carte_decouverte0'] = NULL ;
                  $_SESSION['carte_decouverte1'] = NULL ;
                  $_SESSION['carte_decouverte2'] = NULL ;
                  $_SESSION['carte_decouverte3'] = NULL ;
                  $_SESSION['carte_decouverte4'] = NULL ;
                  $_SESSION['carte_decouverte5'] = NULL ;
                  $_SESSION['carte_decouverte6'] = NULL ;
                  $_SESSION['carte_decouverte7'] = NULL ;
                  $_SESSION['carte_decouverte8'] = NULL ;
                  $_SESSION['carte_decouverte9'] = NULL ; 
                   $_SESSION['carte_decouverte10'] = NULL ;
                  $_SESSION['carte_decouverte11'] = NULL ;    

                }
}  
/////////////////////fonction sinser point////////////////////////////////////
function inser_point($point)
{
 $connexion = dbconnect();
 $requette_inser_point = "INSERT INTO point_parti (points) VALUES ($point)";     
 $inserer_point = mysqli_query($connexion,$requette_inser_point);
}

//////recuperation des pointès////////////////////////////
function nombre_de_point()
{
       $connexion = mysqli_connect("localhost","root","","memory");
       $requette_point = "SELECT * FROM point_parti ";
        $fusion_point = mysqli_query($connexion,$requette_point);
        $nbrpoint = mysqli_num_rows($fusion_point);
        $_SESSION['nbrpoint'] = $nbrpoint;
}
//verifie et insert les point dans le score 
function pointgagner($point_final)
{
 $id = $_SESSION['id'] ;
 $connexion = dbconnect();
 $requette_inser_point_final = " UPDATE utilisateur SET score=score+$point_final WHERE id = $id";     
 $inserer_point = mysqli_query($connexion,$requette_inser_point_final);
	
	
}

function suprimesession_bdd_jeux()
{
          //supression image bdd
                $connexion = dbconnect();
                $requette_de_supression = "DELETE  FROM jeux ;";    
                $supression_de_la_bdd = mysqli_query($connexion,$requette_de_supression);

        // supression des pint bdd
                  $requette_de_supression_point = "DELETE  FROM point_parti ;";    
                  $supression_de_la_bdd = mysqli_query($connexion,$requette_de_supression_point);                   
                  $_SESSION['carte_decouverte0'] = NULL ;
                  $_SESSION['carte_decouverte1'] = NULL ;
                  $_SESSION['carte_decouverte2'] = NULL ;
                  $_SESSION['carte_decouverte3'] = NULL ;
                  $_SESSION['carte_decouverte4'] = NULL ;
                  $_SESSION['carte_decouverte5'] = NULL ;
                  $_SESSION['carte_decouverte6'] = NULL ;
                  $_SESSION['carte_decouverte7'] = NULL ;
                  $_SESSION['carte_decouverte8'] = NULL ;
                  $_SESSION['carte_decouverte9'] = NULL ;
                  $_SESSION['carte_decouverte10'] = NULL ;
                  $_SESSION['carte_decouverte11'] = NULL ;
}

?>











