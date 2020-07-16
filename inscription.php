<?php
		//DEBUT SESSION ET DESTRUCTION
session_start();
 if (!empty($_POST['formdeconexion'])) 
    {   	
    unset ( $_SESSION ['id'] );
    unset ($_SESSION['login']);
	}
			// CONNEXION BASE DE DONNé mysqli
$connexion = mysqli_connect("localhost","olivier-crozet","M3Hfz4H8","olivier-crozet_livre_or");

?>
          <!--HTML LIENS FICHIER-->
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/livre-or.css">
	<link rel="stylesheet" type="text/css" href="css/inscription.css">
	<title>inscription</title>
</head>

<?php



                // WHEN YOU PUSH BUTTON 
if (isset($_POST['inscription']))
	{				
		$login = htmlspecialchars($_POST['login']) ; //evite l'injection ?? what the fuck??
	 
	 	$password = sha1($_POST['password']);//sha1 achage
	 	$password2 = sha1($_POST['password2']);//sha1 achage

			//CHAMP DE FORMULAIRE REMPLI
	if ( !empty($_POST["login"])  && !empty($_POST["password"]) && !empty($_POST["password2"]) && (strlen($_POST["password"])) >3 && (strlen($_POST["password2"]) >3)) 
		{
		  
		  

              // verifier les doublon
			$reqdoublon = "SELECT `login` FROM `utilisateurs` where login=\"$login\";";
       		
			$verifdoublon = mysqli_query($connexion, $reqdoublon);
			$result = mysqli_fetch_array($verifdoublon);
       		

			
	 		$loginlength = strlen($login);// evite de l'injection dans url? pas compris??
	 		if($loginlength <= 255)
	 		{

	 			if ($password == $password2)
	 			 {  // FONCTIONNE EN PDO
	 		 	//$reque="INSERT INTO utilisateurs(login, prenom, nom, password) VALUES('".$login."', '".$prenom."', '".$nom."','".$password."')"; //requette ok
	 		 	//fin du code bon en PDO
	 		 	
	 			//$insertmbr = $connexion->prepare($reque);
               // $insertmbr->execute();
                

	 		 				//CODE BON EN mysql
	 			 if (!isset ($_SESSION['login'])&&$result==NULL)
	 		 		{
	 				$requete="INSERT INTO utilisateurs(login,password)
	 			 				VALUES (\"$login\",\"$password\")";
	 			 	$inser= mysqli_query($connexion, $requete);
					$erreur= "votre compte a bien était créer !";
	 				header("location: livre-or.php");
	 				}
	 					//fin du code bon en mysql
	 				else
	 				{
	 				$erreur= "login deja existant !";
	 				} 			
	 			}



	 			else
	 			{
	 			$erreur = "vos mots de passe sont different !";
	 			}

	 	}
	 		
 		else     
			 {
		 	$erreur = "votre pseudo ne doit pas dépasser 255 caractère  ! ";
			 }
		}

				// CHAMP DE FORMULAIRE VIDE
	else
	{
	$erreur = "<br/>.tous les champ doivent etre complétés et le mot de passe doit contenir plus de 3 caractere !";
	}
 } 
			
 

?>
<body class="oc-body-accueil-btp">
	<div class="oc-backgroud-btp">
  <header class="oc-header-btp">
       <nav class="oc-header">
       <ul class="menu">
  
  <li class="oc-onglet"><a class="oc-nav-marg" href="index.php">accueil</a> </li>
  <li class="oc-onglet"><a class="oc-nav-marg" href="index.php">livre dor</a> </li>
   		    
         </ul>
       </nav>
   </header>	
					<!--HTML TABLEAU INPUT-->
<header>
	  	<h1 class="h1inscription">inscription</h1>
</header>
       <section class="oc-section-inscription">	
		       <h1 class="titrelogin">inscrivez vous !</h1>
	
	      <article class="oc-paneaulogin-inscription">
	      	<form  method="POST" action="" >
	      <table class="tablinscri">
	      	<tr>
	      		<td>
	      			<label  for="login"> login :</label>
				</td>
				<td>
	      			<input type="text" name="login" placeholder="ecrire votre pseudo" value="<?php if(isset($login)){echo $login;} ?>">
	      		</td>
	      	</tr>
	      	<tr>
	      	    <td>
	      	    	
	      	    	<label  for="password">mot de passe :</label>
	      	    </td>
	      	    <td>
	      	    	<input type="password" name="password" placeholder="ecrire votre mot de passe">
	      	    </td>
	      	</tr>
	      	<tr>
	      	     <td>
	      	    	<label  for="password2">confirmer votre mot de passe :</label>
	      	    </td>
	      	    <td>
	      	    	<input type="password" name="password2" placeholder="ecrire votre mot de passe">
	      	    </td>
	      	</tr>
	      	
	      </table>
	      <br/>
	      	      <input  class="buton-inscription" type="submit" name="inscription" value="s'inscrire"/>		
	      	</form>


	<?php
			//MESSAGE D'ERREUR!!
		if (isset($erreur))
		 {
			echo "<strong>".'<font size= "5px" color="white">'.$erreur.'</font>'."</strong>";
		}
	?>
	    
	      </article>
	  
       </section>

       				<!--FOOTER-->
<footer>
	          <section class="oc-footer-navigation">
  <div class="oc-container">
   <h3 class="oc-menu">Menu</h3>
    <div class="oc-columns">
     <ul class="oc-nav2">
      <li ><a class="oc-lien" href="index.php">accueil</a></li><!--
  --> <li ><a class="oc-lien" href="livre-or.php">livre or</a></li><!--
   --><li ><a class="oc-lien" href="projet.php/cv/cvolivier.html">cv</a></li>
      <li><a class="oc-lien" href="contact.php">contact</a></li>
    
   </div>
  </div>
 <div class="oc-container">
  <h3 class="oc-menu">Réseau</h3>
   <div class="oc-columns">
    <ul class="oc-nav2">
      <li ><a class="oc-lien" href="https://www.linkedin.com/">LinkedIn</a></li>
      <li ><a class="oc-lien" href="mailto:olivier.crozet@laplateforme.io">mail</a></li>
    </ul>
   </div>
  </div>
 </section>
</footer>

	  
	 

</body>
</html>