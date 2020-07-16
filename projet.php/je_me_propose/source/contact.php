<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
    <link rel="stylesheet" type="text/css" href="../accueil.css">
    <link rel="icon" type="image/png" href="../pics/icon/jeMePropose.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

         <link rel="stylesheet" type="text/css" href="../css/accueil.css">
    <link rel="icon" type="image/png" href="../pics/icon/jeMePropose.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/profil.css">

    <title>Accueil</title>
</head>

<body>
   <div id="container-mise-en-page">

    
        <div class="header-logo-title">
            <img src="../pics/icon/jeMePropose.png" alt="je me propose logo" title="Site d'entraide">
            <h1>Je-me-propose.com</h1>
        </div>

        <header class="block-accueil">
            <?php include "header.php";?>

        </header>

<div class="contact-us">
  <div class="title">
    <h1>Contact</h1>
  </div>
  <div class="form">
    <div class="form-items">
      <input type="text" class="input" placeholder="Username">
      <i class="fas fa-user"></i>
    </div>
    <div class="form-items">
      <input type="text" class="input" placeholder="Email">
      <i class="fas fa-envelope"></i>
    </div>
    <div class="form-items">
      <textarea class="input message" cols="30" rows="10" placeholder="Message....."></textarea>
    </div>
  </div>
  <div class="btn">
    <a href="">envoyer</a>
    <i class="fas fa-arrow-right"></i>
  </div>  
</div>
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