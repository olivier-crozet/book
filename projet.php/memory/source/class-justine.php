

<?php

	class user{
		
		// private $host = 'localhost';
		// private $username = 'olivier-crozet';
		// private $password = 'M3Hfz4H8';
		// public $db= 'olivier-crozet_memory';

		private $host = 'localhost';
		private $username = 'root';
		private $password = '';
		public $db= 'memory';


		public function connect()
		{
			if (isset($_POST['valider']))
			{
				
			$login = $_POST['login'];
			$password = $_POST['password'];
			
				if ($login && $password)
				{
					
					$connect = mysqli_connect($this->host, $this->username, $this->password, $this->db);
				    $query = "SELECT * FROM utilisateur WHERE login = '".$login."'";
					$reg = mysqli_query($connect,$query);
					$rows= mysqli_fetch_assoc($reg);
					mysqli_close($connect);
			
				if ($login == $rows ['login'])
                {
					if (password_verify($_POST['password'],$rows['password']))
					{   
						$_SESSION['id']=$rows['id'];
						$_SESSION['login']=$login;
						$_SESSION['password']=$password;
						echo 'je suis connecté';
						header("location:connexion.php");
					
					} else echo "<p class='voir-articles2'>Login ou Mot de passe incorrect</p>";
				
				} else echo "<p class='voir-articles2'>Login ou Mot de passe incorrect</p>";
			
			} else echo "<p class='voir-articles2'>Veuillez saisir tous les champs</p>";
		}
	}
		
		public function updatelogin()
		{
			if(isset($_POST['submit2'])) 
			{
				$login = $_POST['login2'];
				$password = $_POST['motdepasse'];
		
				if(!empty($login) && !empty($password))
				{
					$connect = mysqli_connect($this->host, $this->username, $this->password, $this->db);
					$query = "SELECT * FROM utilisateur WHERE login ='". $login . "' limit 1";
					$reg = mysqli_query ($connect,$query);
					/*permet de lire/retourner une ligne du tableau, la première par défaut*/
					$rows = mysqli_num_rows($reg);
					//BON JE TE FAIS LES BONNES PRATIQUES EN MEME TEMPS
					if(!empty($rows)){
						echo "Le pseudo est déjà utilisé";
						exit;
					}
					
					$query2 = "SELECT password FROM utilisateur WHERE login ='". $_SESSION['login'] . "' limit 1";
					$reg2 = mysqli_query ($connect,$query2);
					$rows2 = mysqli_fetch_assoc($reg2);
					if(!password_verify($_POST['motdepasse'], $rows2['password']))
					{
						echo "<p class='inscription-error'>Pseudo ou Mot de passe incorrect</p>";	
					}
					$query3 = "UPDATE utilisateur SET login = '".$login."' WHERE login = '".$_SESSION['login']."'";
						$reg3 = mysqli_query($connect, $query3);
					
			
				} else {
					echo "<p class='inscription-error'>Veuillez saisir tous les champs</p>";
				}
	
			} 
		}
		
		
public function updatepassword()
{
	if(isset($_POST['submit3']))
	{
		$ancienpassword = $_POST['ancienmotdepasse'];
		$newpassword = $_POST['nouveaumotdepasse'];


		if(empty($newpassword) || empty($ancienpassword)) {
			echo "<p class='inscription-error'>Veuillez saisir tous les champs</p>";
		}

			$connect = mysqli_connect($this->host, $this->username, $this->password, $this->db);
			$query = "SELECT password FROM utilisateur WHERE login = '" . $_SESSION["login"] . "'";
			$reg = mysqli_query ($connect,$query);
			/*permet de lire/retourner une ligne du tableau, la première par défaut*/
			$rows = mysqli_fetch_assoc($reg);

			if(!password_verify($ancienpassword, $rows['password']))
			{
				echo "<p class='inscription-error'>Mot de passe incorrect</p>";
			}

			$query2 = "UPDATE utilisateur SET password = '".password_hash($newpassword, PASSWORD_DEFAULT)."' WHERE login = '".$_SESSION["login"]."'";
			$reg2 = mysqli_query($connect, $query2);
	}
}
	}

	?>