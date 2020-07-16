<?php

function dbconnect()
{  //CHANGER LA CONNEXION LIGNE 392 a la main
     // return mysqli_connect("localhost","olivier-crozet","M3Hfz4H8","olivier-crozet_memory");
     
 
     // return $connexion;
      return mysqli_connect("localhost","root","","thalassante");
}
/**
 * class utilisateurs 
 comprend les parametre utilisateur //////////////////////////////////////////////////////////////////////////::
 et les fonction d'inscription

 */
class client
{
  
  private $id = "";
  public $login = "";
  public $score = "";


  function inscriptionoc()
  {  
          $login =htmlspecialchars($_POST['login']); 
          $password= password_hash($_POST["password"], PASSWORD_DEFAULT,array('cost'=> 12));
          if (!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['password2']))
          {
                  if ($login < 249 && $password < 249  )
                  {
          
                    $connexion = dbconnect();
                    $reqdoublon = "SELECT login FROM `utilisateur` where login=\"$login\";";
                    $req=mysqli_query($connexion,$reqdoublon);                 
                    $retour=mysqli_num_rows($req);

                          if($retour==0)
                           {                 
                            $score = 0 ;     
                            $requete="INSERT INTO utilisateur(login,password,score)
                            VALUES (\"$login\",\"$password\",\"$score\")";                
                            $inser= mysqli_query($connexion, $requete);

                             
                          } 
                          else
                          {
                            echo "ce login existe deja !";
                          }  
                 }
                 else
                 {
                  echo "tu te fou de moi !";
                 }          
          }
          else
          {
            echo "veuillez remplir tous les champs !";
          }              
    }
      
}




//////////////////////////////////////////class img 1/////////////////////////////////:


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
               
                  /////////enregistrement de limage en session////////////////
                   $_SESSION['im0'] = $imagemel0;
                   $_SESSION['im1'] = $imagemel1;
                   $_SESSION['im2'] = $imagemel2;

                  }
     ////////////////fermeture fonction/////////////////////////
   }
   ////////////////////fermeture class
 }

//////////////////////////////////////AFFICHACHGE DES CARTES///////////////////////////////////
                                      ///////carte a///////////////
 /**
  * carte 1
  */
 class carteA
 {
   
   function affichage()
   {
     # code...////si il resort de la page jeuxcarte il creer une sessions im0pass se qui donne accer a limage ////////:

            if(isset($_SESSION['im0pass']))
                  {
                        $connexion = dbconnect();
                            //insertion du liens cliqué//
                    
                 
                   //////selectione les liens present dans la bdd////////
                   $controlimg = $_SESSION['im0'];
                   $requlien1oc = "SELECT * FROM jeux where liens = '$controlimg'";
                   $fusion = mysqli_query($connexion,$requlien1oc);
                   //je met sa en tableau
                   $requseroc = (array($fusion));
                   //je compte le nombre de resultat
                   $lienexist = mysqli_num_rows($fusion);

                   if($lienexist <= 1)
                   {
                    $relou = $_SESSION['im0'];

                    $_SESSION['carte1'] = $relou;
                    echo $_SESSION['im0'];
                   }
                else
                {
                 ////////////destruction des données
                  $connexion = dbconnect();
                  $requettesuprim = "DELETE * FROM jeux ";
                  $fusionrequette = mysqli_query($connexion,$requlien1oc);

                  //session_destroy('im0pass');
                 // session_destroy('im1pass');
                  session_destroy();
    
                }
                  }
                  else
                  {
                    echo"../images/doscarte.jpg";
                   
                  }
   }
 }
                         //////////////////////////carte b///////////////////////////////////
 /**
  * deuxiemecarte
  */
 class carteB
 {
 
   function affichage1()
   {
    $connexion = dbconnect();
    //si il a cliqué sur le liens la session a etait creer dans la page jeuxcarte //
     if (isset($_SESSION['im1pass']))
      {
        
        //////selectione les liens present dans la bdd////////
        
  $controlimg = $_SESSION['im1'];
        $requlien1oc = "SELECT * FROM jeux where liens = '$controlimg'";
        $fusion = mysqli_query($connexion,$requlien1oc);
        //je met sa en tableau
      $requseroc = (array($fusion));
      //je compte le nombre de resultat
      $lienexist = mysqli_num_rows($fusion);
     // $recuperation_enciene_img = 
          if($lienexist <= 1 )
       {
      //////affiche limage/////
        echo $_SESSION['im1'];
        }
          else
          {
  ////////////destruction des données

           // $requettesuprim = "DELETE * FROM jeux ";
           // $fusionrequette = mysqli_query($connexion,$requlien1oc);

           // session_destroy('im0pass');
           // session_destroy('im1pass');
           // session_destroy('im2pass');
            //header('Location:jeux.php?');
           }
   

        
      }
      else
      {
        echo "../images/doscarte.jpg";
      }
   }
 }

                                 //////////carte c //////////
 /**
  * 
  */
 class carteC
 {
   
   function affichage2()
   {
    $connexion = dbconnect();
    //si il a cliqué sur le liens la session a etait creer dans la page jeuxcarte //
     
     if (isset($_SESSION['im2pass']))
      {
              //////selectione les liens present dans la bdd////////
        
        $controlimg = $_SESSION['im2'];
        $requlien1oc = "SELECT * FROM jeux where liens = '$controlimg'";
        $fusion = mysqli_query($connexion,$requlien1oc);
        //je met sa en tableau
        $requseroc = (array($fusion));
      //je compte le nombre de resultat
        $lienexist = mysqli_num_rows($fusion);

          if($lienexist <= 1)
       {
      //////affiche limage/////
          echo $_SESSION['im2'];
           }
          else
          {
  ////////////destruction des données
           // $connexion=mysqli_connect("localhost","root","","memory");
           // $requettesuprim = "DELETE * FROM jeux ";
           // $fusionrequette = mysqli_query($connexion,$requlien1oc);

          //  session_destroy();
            
            header('Location:jeux.php?');
           }
        }
      else
      {
        echo "../images/doscarte.jpg";
         
      }
   }
 }


////////////////////////////////// insertion bdd///////////////////////////////

 /**
  * insertion repere image
  */
 class insertionliens
 {
   public $liensimg = "";
   function inserliens($liensimg,$numeropaire)
   {
         # code...
        $connexion = dbconnect();
         $requette_inser_reper = "INSERT INTO jeux (liens, paire) VALUES ('$liensimg', '$numeropaire')";     
         $inserer = mysqli_query($connexion,$requette_inser_reper);

    }
 }
   

//////////////////////////verificateur de cartes////////////////////////////////

/**
 * 
 */
class verifcarte
{
  
public $controlimg = "";

   function controler($controlimg)
   {

     $connexion = dbconnect();
    $requete_verif_liens = "SELECT  '$controlimg' FROM jeux  ";
    $verif = mysqli_query($connexion,$requete_verif_liens);
   // $verification = count($verif);
   
    $verification = count($verif);

       if ($verification <= 1 ) 
       {
       echo 1;
        }
          else
          {
  //  $requette_inser_reper = "INSERT INTO jeux(liens) VALUE ('$liensimg')";
          //  session_destroy('im0pass');
          //  session_destroy('im1pass');
          //  session_destroy('im2pass');
    
           }
   }

}


    ///////verifif si les paire corresponde///////////
/**
 * 
 */
class paire
{
  public $liensimage_prcedente = "";

  function verifi_la_paire($liensimage_prcedente)
  {
   ////metre sa en fonction desous
        
        $connexion = dbconnect();
        $requettepaire = "SELECT paire FROM JEUX WHERE liens = '$liensimage_prcedente' ";  
        $fusionreq = mysqli_query($connexion,$requettepaire);
        $existil =mysqli_fetch_array($fusionreq);
       
   
     //   $existil = mysqli_num_rows($fusionreq);

     
     if ( $existil[0] == 0 ) 
     {

    
      $connexion = dbconnect();
      $requette_de_supression = "DELETE  FROM jeux  ;";
    
      $supression_de_la_bdd = mysqli_query($connexion,$requette_de_supression);
     
      unset($GLOBALS['$_SESSION[\'im0\']']);
      
     // session_destroy();

     // header('Location:jeux.php?');
     }     
     else
     {
     
      //inseré un point
      header('Location:jeux.php?');
     }
  }
}


function score()
{ //a finir
  //$connexion = dbconnect();
  $connexion=mysqli_connect("localhost","root","","memory");
   $requettepaire = "SELECT login , score FROM utilisateur ORDER BY score DESC ";  
        $fusionreq = mysqli_query($connexion,$requettepaire);
        $existil =mysqli_fetch_all($fusionreq);
        
        $compte = count($existil);
 ?> 
 <table>
   
      
        <?php
  for ($i=0; $i < $compte ; $i++) 
  { ?>
    <table>
  <tbody>
    <td>
  <tr>  <?php echo $existil[$i][0] ?> </tr>
  </td>
  <td>
  <tr>  <?php echo $existil[$i][1] ?></tr>
    </td>
  </table>
  </tbody>
 <?php }
}
////////////////////////////////////////////////////////////////////////////////////////////////////