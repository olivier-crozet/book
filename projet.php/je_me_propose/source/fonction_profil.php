<?php

$adresse_serv ="localhost";
$nom_serv ="root";
$mdp_serv ="";
$bdd_serv ="je_me_propose";


//$connexion = mysqli_connect("localhost","olivier-crozet","M3Hfz4H8","olivier-crozet_je_me_propose");


function bbd_conect()
{
  //$connexion
   return mysqli_connect("localhost","root","","je_me_propose");
}


function affichage_profil()
{
  //var_dump($nom_serv);
	$id = $_SESSION['id'];
	//$connexion = mysqli_connect("localhost","root","","je_me_propose");
  $connexion = bbd_conect();
	$requette_user = "SELECT login, age, sexe, region, ville, tel FROM utilisateurs where id = $id";
	$execute = mysqli_query($connexion,$requette_user);
	$infos_user = mysqli_fetch_all($execute);
	echo "Login : ".$infos_user[0][0]."</br>";
	echo "Age : ".$infos_user[0][1]."</br>";
	echo "Sexe : ".$infos_user[0][2]."</br>";
	echo "Region : ".$infos_user[0][3]."</br>";
	echo "Ville : ".$infos_user[0][4]."</br>";
	echo "Telephone : ".$infos_user[0][5]."</br>";
}


function affichage_foto()
{
	if(isset($_SESSION['id']) )
   {     
   	$id = $_SESSION['id'];

		$reqimg = ("SELECT profilPic FROM utilisateurs WHERE id = $id");
   }
    else
    {   
		//$reqimg = ("SELECT profilPic FROM utilisateurs WHERE id =".$_SESSION["id"]);
    }
    //$connexion = mysqli_connect("localhost","olivier-crozet","M3Hfz4H8","olivier-crozet_je_me_propose");
    $connexion = bbd_conect();
    $reqimgco = mysqli_query($connexion,$reqimg);

    $imgrecup = mysqli_fetch_array($reqimgco);
	  if (!empty($imgrecup[0])) 
	  {
?>
     <img class = "oc-img-profil" src="<?php echo $imgrecup[0] ; ?>" > 
<?php 
     }
	 else
	 {  ?>
       <img class = "oc-img-profil" src="profilPics/profil.jpg" >
           <?php
	 }
}

function modif_profil($lid)
{
 if (!empty($_POST['modif']))
       {       
       if (!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['password2']) ) 
       {               
            if (($_POST['password']) == ($_POST['password2']))  
                 {            
                  $connexion = mysqli_connect("localhost","olivier-crozet","M3Hfz4H8","olivier-crozet_je_me_propose");
                  $login= htmlspecialchars($_POST['login']);
                  $password= password_hash($_POST["password"], PASSWORD_DEFAULT,array('cost'=> 12));

                  $reqdoublon = "SELECT login, age, sexe, region, tel, ville FROM `utilisateurs` where login =\"$login\";";
                  $req=mysqli_query($connexion,$reqdoublon); 
                  $retour=mysqli_num_rows($req);

                           if($retour==0)
                           {            
                              //if (isset($_POST['image'])) 
                            //  {
                            //    $ocnewimg = $_POST['image'];
                            //  }
                                      $age = htmlspecialchars($_POST['Age']);
                                      $sexe = $_POST['sexe'] ;
                                      $region =  $_POST['region'];
                                      $tel = htmlspecialchars($_POST['tel']) ;
                                      $ville = htmlspecialchars($_POST['ville']) ;
                                      
                           $requeteupdate ="UPDATE utilisateurs SET login = '$login' , password = '$password', Age = $age , sexe = '$sexe' , region = '$region' , tel = $tel , ville = '$ville'  WHERE id='$lid'";        
                             $inser= mysqli_query($connexion,$requeteupdate);
                             var_dump($requeteupdate);
                           //  header("location: profil.php?id=".$id_user_profil."");
                          } 
                          else
                          {
                            echo "ce login existe deja !";
                          }
               }
               else
               {
                echo "les passwords ne sont pas identiques !";
               }
    }
  else
  {
    echo "tous les champs doivent etre complétés !";
  }
}
}

function modif_image_profil()
{

	   if ( isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name']))
                                { 
                                 //taille en octe
                                   $taillemax = 2097152 ;  
                                   $extensionvalide = array('jpg', 'jpeg', 'gif', 'png');  
                                   //veri la taille
                                     if ($_FILES['avatar']['size'] <= $taillemax)
                                      { 
                                        // met tous les carractere en minuscule                                    1=limite de chaine
                                         $extensionupload = strtolower(substr(strchr($_FILES['avatar']['name'],'.'), 1));
                                         //verif extention
                                             if (in_array($extensionupload, $extensionvalide)) 
                                             {
                                               $chemin = "../avatar/".".".$_SESSION['id'].".".$extensionupload;
                                               $couenta = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
                                                    if ($couenta)
                                                     { 
                                                      $connexion = mysqli_connect("localhost","olivier-crozet","M3Hfz4H8","olivier-crozet_je_me_propose");

                                                     	$id = $_SESSION['id'];
                                                      $requeteupdate ="UPDATE utilisateurs SET  profilPic = '$chemin'  WHERE id='$id'"; 
                         
                                                      $inser= mysqli_query($connexion,$requeteupdate);

                                                      header("location: profil.php");


                ///////////////////////////////////////verif l'identité pour modifier le profil////////////////////////////////////////
                                                      $connexion = mysqli_connect("localhost","olivier-crozet","M3Hfz4H8","olivier-crozet_je_me_propose");
                                                      $id_user = $_SESSION['id'];
                                                      $requette_id = "SELECT id FROM utilisateurs where id = $id_user ";
                                                      $requette_id_connexion = mysqli_query($connexion,$requette_id);
                                                      $result_id = mysqli_fetch_assoc($requette_id_connexion);
      
                                                      $id_user_profil = $result_id['id'];
                                                   //   header("location: profil.php?id=".$id_user_profil."");

                                                     }
                                                     else
                                                     {
                                                       echo "erreur lors du telechargement !";
                                                     }
                                             }
                                             else
                                             {
                                              echo "votre imga doit etre au format jpg, jpeg, gif, png";
                                             }
                                      }
                                      else
                                      {
                                        echo "votre foto ne doit pas depasser 2 mo";
                                      }
                                        }   
                                 //fin avatar  

                                    
	                            
}