
<!DOCTYPE html>
<html>
<head>
	<title>Jeux</title>
	<link rel="stylesheet" type="text/css" href="../style/jeux.css">
    <link rel="stylesheet" type="text/css" href="../style/header.css">
</head>
<body class="oc_body_jeux">
	<header>
		<?php 
		include ('class_ocbis.php');
		include ('header.php');
		if (!isset($_SESSION['id']))
		{
			header("location:connexion.php");
		}
		 ?>
	</header>
	<main class="oc_main_jeux">
		<h1 class = "oc_titre_jeux">Relevez le Defis !</h1>
    
      	<?php /////////////////////////////////////////////////////////////////////////:
      	/////////////////melange des images niveau 1 /////////////////////////////////////////////////////
      

      	//si la session melanger == 0 on melange les carte pour niveau 1
if ( isset($_SESSION['melanger']) OR isset($_SESSION['debut_parti']))
 {
    # code...

    if (   $_SESSION['melanger'] == 0 &&  $_SESSION['debut_parti'] == 1 ) ////si la session est vide et si le niveau est 1
    {
    	# on melange les carte
          $_SESSION['melanger'] = 1;
        	 $melange = new image();
          $melange ->melange();
          suprimesession_bdd_jeux();
          header('Location:jeux.php?');
    }  //pour niveau 2
    elseif (  $_SESSION['melanger'] == 0 &&  $_SESSION['debut_parti'] == 2 ) //si le niveau est 2
    {
         $_SESSION['melanger'] = 1;
             $melange2 = new image_niveau2();
          $melange2 ->melange2();
          suprimesession_bdd_jeux();
          header('Location:jeux.php?');
    }
    elseif ($_SESSION['melanger'] == 0 &&  $_SESSION['debut_parti'] == 3)
     {
        $_SESSION['melanger'] = 1;
             $melange2 = new image_niveau3();
          $melange2 ->melange3();
          suprimesession_bdd_jeux();
          header('Location:jeux.php?');
    }

 }   
    else
    {
        $_SESSION['debut_parti'] = 0;
        $_SESSION['melanger'] = NULL ;
    }
    //boutton melanger////////////////////////
     	?>
        <section class="oc_section_bouton">
        <form  method="post" action="">
            <input class="deco_bouton_oc" type="submit" name="remelange" value="remélanger">
           <?php if (isset($_POST['remelange'])) { bouton_melange(); }  ?>
        </form>
        <!--///boutton level ///////////.................a finir//-->
        <form  class="oc_form_2" method="post" action="">

            <SELECT class="deco_bouton_oc" name="liste_level" size="1">
                <OPTION value = "facile">facile</OPTION>
                    <OPTION>moyen</OPTION>
                        <OPTION>difficile</OPTION>
                        </SELECT>  
                        <input id="oc_bouton_niveau" class="deco_bouton_oc"  type="submit" name="valider_niveau" value ="valider le niveau ">                      
         </form>
     </section>
         <section class="oc_section_jeux">
    <?php
if (!isset($_SESSION["debut_parti"]))
 {
    $_SESSION["debut_parti"] = 0 ;
}
    //si il choisi le niveau 1
   if ( $_SESSION['debut_parti'] == 1 ) 
   {
     ?>
     <article class="oc_article_jeux1">
     	<a class="taille-img-1-oc" href="carte0.php">
     		<div class="taille-img-1-oc"><img class="taille-img-1-oc"  src="<?php  affichage();   ?>	">      
     		</div>
     	</a>
     	<a class="taille-img-1-oc" href="carte1.php"> 
     		<div class="taille-img-1-oc"><img class="taille-img-1-oc" src="<?php  affichage1();   ?>">
     		</div>
     	</a>
     	<a class="taille-img-1-oc" href="carte2.php">
     		<div class="taille-img-1-oc"><img class="taille-img-1-oc" src="<?php affichage2() ?>">  	    	
     		</div>
     	</a>
     </article>
     <article class = "oc_article_jeux1">
        <a class="taille-img-1-oc" href="carte3.php">
            <div class="taille-img-1-oc"><img class="taille-img-1-oc" src="<?php affichage3() ?>">              
            </div>
        </a>
        <a class="taille-img-1-oc" href="carte4.php">
            <div class="taille-img-1-oc"><img class="taille-img-1-oc" src="<?php affichage4() ?>">              
            </div>
        </a>
        <a class="taille-img-1-oc" href="carte5.php">
            <div class="taille-img-1-oc"><img class="taille-img-1-oc" src="<?php affichage5() ?>">              
            </div>
        </a>
     </article>
        <?php 
        //nobre de point parti gagner niveau 1
        nombre_de_point();
        if ($_SESSION['nbrpoint'] == 12) 
        {
                  pointgagner(1);
                   $connexion = dbconnect();
        $requette_de_supression = "DELETE  FROM jeux ;";
        $supression_de_la_bdd = mysqli_query($connexion,$requette_de_supression);
        $requette_de_supression_parti = "DELETE  FROM point_parti ;";
        $supression_de_la_bdd_parti = mysqli_query($connexion,$requette_de_supression_parti);
        session_destroy();
        header('Location:accueil.php');
        }
//fermeture condition niveau 1
    }///////////////////////////////////////////////////:NIVEAU2 /////////////////////////////////////////
    elseif ($_SESSION['debut_parti'] == 2)
     {
        ?>
        <article class="oc_article_jeux1">
        <a class="taille-img-1-oc" href="carte0.php">
            <div><img class="taille-img-1-oc"  src="<?php  affichage();   ?>    ">      
            </div>
        </a>
        <a class="taille-img-1-oc" href="carte1.php"> 
            <div><img class="taille-img-1-oc" src="<?php  affichage1();   ?>">
            </div>
        </a>
        <a class="taille-img-1-oc" href="carte2.php">
            <div><img class="taille-img-1-oc" src="<?php affichage2() ?>">              
            </div>
        </a>
        <a class="taille-img-1-oc" href="carte3.php">
            <div><img class="taille-img-1-oc" src="<?php affichage3() ?>">              
            </div>
        </a>
        <a class="taille-img-1-oc" href="carte4.php">
            <div><img class="taille-img-1-oc" src="<?php affichage4() ?>">              
            </div>
        </a>
    </article>
     <article class="oc_article_jeux1">   
        <a class="taille-img-1-oc" href="carte5.php">
            <div><img class="taille-img-1-oc" src="<?php affichage5() ?>">              
            </div>
        </a>
        <a class="taille-img-1-oc" href="carte6.php">
            <div><img class="taille-img-1-oc" src="<?php affichage6() ?>">              
            </div>
        </a>
        <a class="taille-img-1-oc" href="carte7.php">
            <div><img class="taille-img-1-oc" src="<?php affichage7() ?>">              
            </div>
        </a>
        <a class="taille-img-1-oc" href="carte8.php">
            <div><img class="taille-img-1-oc" src="<?php affichage8() ?>">              
            </div>
        </a>
        <a class="taille-img-1-oc" href="carte9.php">
            <div><img class="taille-img-1-oc" src="<?php affichage9() ?>">              
            </div>
        </a>
    </article>



        <?php 
        //nobre de point parti gagner niveau 2
  
            nombre_de_point();
            
              if ($_SESSION['nbrpoint'] == 30) 
              {
                       pointgagner(3);
                       $connexion = dbconnect();
                       $requette_de_supression = "DELETE  FROM jeux ;";
                       $supression_de_la_bdd = mysqli_query($connexion,$requette_de_supression);
                       $requette_de_supression_parti = "DELETE  FROM point_parti ;";
                       $supression_de_la_bdd_parti = mysqli_query($connexion,$requette_de_supression_parti);
                       session_destroy();
                       header('Location:accueil.php');
                   }

    }//////////////////////////////////FIN DE PARTIE 2////////////////////////////////////////////////////
    ///////////////////////// NIVEAU 3/////////////////////////////////////////////////////////
     elseif ($_SESSION['debut_parti'] == 3)
     {
        ?>
        <article class="oc_article_jeux1">
        <a class="taille-img-1-oc" href="carte0.php">
            <div><img class="taille-img-1-oc"  src="<?php  affichage();   ?>    ">      
            </div>
        </a>
        <a class="taille-img-1-oc" href="carte1.php"> 
            <div><img class="taille-img-1-oc" src="<?php  affichage1();   ?>">
            </div>
        </a>
        <a class="taille-img-1-oc" href="carte2.php">
            <div><img class="taille-img-1-oc" src="<?php affichage2() ?>">              
            </div>
        </a>
        <a class="taille-img-1-oc" href="carte3.php">
            <div><img class="taille-img-1-oc" src="<?php affichage3() ?>">              
            </div>
        </a>
    </article>
    <article class="oc_article_jeux1">
        <a class="taille-img-1-oc" href="carte4.php">
            <div><img class="taille-img-1-oc" src="<?php affichage4() ?>">              
            </div>
        </a>
        <a class="taille-img-1-oc" href="carte5.php">
            <div><img class="taille-img-1-oc" src="<?php affichage5() ?>">              
            </div>
        </a>
        <a class="taille-img-1-oc" href="carte6.php">
            <div><img class="taille-img-1-oc" src="<?php affichage6() ?>">              
            </div>
        </a>
        <a class="taille-img-1-oc" href="carte7.php">
            <div><img class="taille-img-1-oc" src="<?php affichage7() ?>">              
            </div>
        </a>
    </article>
    <article class="oc_article_jeux1">
        <a class="taille-img-1-oc" href="carte8.php">
            <div><img class="taille-img-1-oc" src="<?php affichage8() ?>">              
            </div>
        </a>
        <a class="taille-img-1-oc" href="carte9.php">
            <div><img class="taille-img-1-oc" src="<?php affichage9() ?>">              
            </div>
        </a>
        <a class="taille-img-1-oc" href="carte10.php">
            <div><img class="taille-img-1-oc" src="<?php affichage10() ?>">              
            </div>
        </a>
        <a class="taille-img-1-oc" href="carte11.php">
            <div><img class="taille-img-1-oc" src="<?php affichage11() ?>">              
            </div>
        </a>
    </article>



        <?php 
        //nobre de point parti gagner niveau 2
  
            nombre_de_point();
            
              if ($_SESSION['nbrpoint'] == 42) 
              {
                       pointgagner(6);
                            $connexion = dbconnect();
        $requette_de_supression = "DELETE  FROM jeux ;";
        $supression_de_la_bdd = mysqli_query($connexion,$requette_de_supression);
        $requette_de_supression_parti = "DELETE  FROM point_parti ;";
        $supression_de_la_bdd_parti = mysqli_query($connexion,$requette_de_supression_parti);
        session_destroy();
        header('Location:accueil.php');
        }

    }//
    //si il y a pas de parti engagé
    else
    {   //si on valide le niveau
        if (isset($_POST['valider_niveau']) ) 
        {
           
            $niveau = $_POST["liste_level"] ;
            //si il valide le niveau 1
            if ( $niveau == 'facile')
            {
               $_SESSION['debut_parti'] = 1 ;
               header('Location:jeux.php?');
            }
            elseif ( $niveau =='moyen')
             {
                $_SESSION['debut_parti'] = 2 ;
              header('Location:jeux.php?');
            }
            elseif ($niveau == 'difficile') 
            {
                $_SESSION['debut_parti'] = 3 ;
                header('Location:jeux.php?');
            }

        }

        }








     
        ?>
        </section>
	</main>
</body>
</html>
