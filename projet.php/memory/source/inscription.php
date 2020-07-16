<?php

include("class_oc.php");
?>
<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" type="text/css" href="../style/inscription.css">
     <link rel="stylesheet" type="text/css" href="../style/header.css">
	<title>inscription</title>

</head>
<body>
	<header>
		<?php include ('header.php'); ?>
	</header>
	<main>
     	       	<h1 class="oc-h1-inscription">inscrivez vous !</h1>
                    <!--::::::::::::::::::::::::::::::::::::::::::/FORMULAIRE HTML:::::::::::::::::::::::::-->
                    <form class="oc-form-inscription" method="post" action="">
     	       	<table>
     	       		<tbody>
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
          
     	       		</tbody>
     	       	</table>
     	       	 <br/>
                <input  class="buton-inscription" type="submit" name="submit" value="s'inscrire"/>   
          </form>
<?php /////////////////////////////////////////INSCRIPTION///////////////////////////////////////////////////////////
	if (isset($_POST['submit'])) 
	{
          $login =htmlspecialchars($_POST['login']); 
          $password= password_hash($_POST["password"], PASSWORD_DEFAULT,array('cost'=> 12));
          $utilisateur = new client();
          $utilisateur ->inscriptionoc($login,$password);
	header("location:connexion.php");
	}
?>
    </main>
</body>
</html>