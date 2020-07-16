<?php

?>

<html>
	<head>
		   <meta charset="utf-8">
		 <link rel="stylesheet" type="text/css" href="">
		  
       <link rel="stylesheet" type="text/css" href="../css/accueil.css">
    <link rel="icon" type="image/png" href="../pics/icon/jeMePropose.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/profil.css">
		 <title>profil</title>
	</head>
		
	<body class="oc-body-accueil-btp">
     <div id="container-mise-en-page">

  <div class="header-logo-title">
            <img src="../pics/icon/jeMePropose.png" alt="je me propose logo" title="Site d'entraide">
            <h1>Je-me-propose.com</h1>
        </div>

        <header class="block-accueil">
            <?php include "header.php";  ?>

        </header>
				<?php 
        include('fonction_profil.php');
        ?>  

    <section >
    <article class="section-deventure"  >    
		<div class="oc-div-image">
       <?php 

      affichage_foto();
      ?>
    </div>

    <div class="oc-div-infos">
      <?php 

      affichage_profil();
      ?>
    </div>
    </article>
    <section id="oc-bgx" class="oc-tablinscri">
               <form class="oc-form-profil" method="POST" action="" enctype="multipart/form-data">
 
         
                 <div>
                  <label  for="login">modifier le login :</label>
                </div>
                <div>
                  <input type="text" name="login" placeholder="ecrire votre pseudo" value="<?php if(isset($login)){echo $login;} ?>">
                </div>
                <div>
                  <label for="image">inserer votre image de profil : </label>
                </div>
                <div>
                  <input type="file" name ="avatar" placeholder="">
                </div>
                <div>
                  <label  for="password">modifier le mot de passe :</label>
                </div>
                <div>
                  <input type="password" name="password" placeholder="ecrire votre mot de passe">
                </div>
                <label  for="newpassword2">confirmer votre mot de passe :</label>
                <div>
                  <input type="password" name="password2" placeholder="ecrire votre mot de passe">
                </div>

                <div class="input">
                  <input type="number" name="Age" placeholder="Age *">
                </div>
                <div class="input">
                  <select name="sexe">
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                  </select>
                </div>
                <div>
                  Sélectionnez vôtre région :<br/>
                  <select name="region" size="1">
                    <option value="Auvergne-Rhône-Alpes">Auvergne-Rhône-Alpes</option>
                    <option value="Bourgogne-Franche-Comté">Bourgogne-Franche-Comté</option>
                    <option value="Bretagne">Bretagne</option>
                    <option value="Centre-Val-de-Loire">Centre-Val-de-Loire</option>
                    <option value="Corse">Corse</option>
                    <option value="Grand-est">Grand-Est</option>
                    <option value="Hauts-de-France">Hauts-de-France</option>
                    <option value="Ile-de-france">Île-de-France</option>
                    <option value="Normandie">Normandie</option>
                    <option value="Nouvelle-Aquitaine">Nouvelle-Aquitaine</option>
                    <option value="Occitanie">Occitanie</option>
                    <option value="Pays-de-la-loire">Pays de la Loire</option>
                    <option value="Provence-Alpes-Côte">Provence-Alpes-Côte d'Azur</option>
                  </select>
                </div>

                <br/>
                <div class="input">
                  <input type="text" name="tel" placeholder="Numéro de téléphone *">
                </div>
                <div class="input">
                  <input type="text" name="ville" placeholder="Ville *">
                </div>
              </table>
              <br/>
              <input  class="buton-inscription" type="submit" name="modif" value="modifier le profil !"/>
            </form> 
            <?php

            if (isset($_POST['modif'])) 
            {
              modif_profil($_SESSION['id']);

              modif_image_profil();

            }
            ?>
          </section>
        </section>

      </main>

      <!--//////////////////////////////////////////////////FOOTER///////////////////////////////////////////////////////////////////////-->

      <footer class="block-accueil">
        <ul>
          <li><a href="infos.php">accueil</a></li>
          <li><a href="">connexion</a></li>
          <li><a href="">inscription</a></li>
          <li><a href="">informations</a></li>
          <li><a href="">contact</a></li>
        </ul>
      </footer>
    </body>
    </html>