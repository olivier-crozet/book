<?php
  $connexion = mysqli_connect("localhost","olivier-crozet","M3Hfz4H8","olivier-crozet_livre_or");
    
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <meta charset="utf-8">
    <title>Contact</title>
</head>

<body>
 <header>
          <nav class="oc-header">
       <ul class="menu">
  
  <li class="oc-onglet"><a class="oc-nav-marg" href="index.php">accueil</a> </li>
  
  <li class="oc-onglet" class="violet"><a class="oc-nav-marg" href="#">languages</a>
        <ul class="oc-back1">
  <li class="oc-sous"><a href="#">html</a>
    <ul>
  <li><a class="oc-sous-sous" href="projet.php/404/404.html">404</a></li>
  <li><a class="oc-sous-sous" href="projet.php/work-in-progress/work-in-progress.html">work in progress</a></li>
  <li><a class="oc-sous-sous" href="projet.php/btp/accueil.html">btp</a></li>
  <li><a class="oc-sous-sous" href="projet.php/application-favorites/app-favorites.html">application favorites</a></li>
  <li><a class="oc-sous-sous" href="projet.php/voyages/voyages.html">voyages</a></li>
  <li><a class="oc-sous-sous" href="projet.php/botanique/accueil.html">botanique</a></li>
        </ul>
        </li>
  <li>
  <li class="oc-sous"><a href="#">php.sql</a>
    <ul>
  <li><a class="oc-sous-sous" href="projet.php/connexion/">connexion</a></li>
  <li><a class="oc-sous-sous" href="projet.php/discussion/">discussion</a></li>
     </ul>
  </li>
  <li class="oc-sous"><a href="#">java script</a>
     <ul>
  <li><a class="oc-sous-sous" href="voyage31.html"></a></li>
  <li><a class="oc-sous-sous" href="voyage32.html"></a></li>
    </ul>
    </ul>
  </li>
  <li>
  <li class="oc-onglet"><a class="oc-nav-marg" href="livre-or.php">livre d'or</a>
    <ul class="oc-back1">
 <!-- <li class="oc-sous"><a href="voyage21.html">norvège</li></a>
  <li class="oc-sous"><a href="voyage22.html">bénin</li></a>
  <li class="oc-sous"><a href="voyage11.html">brésil</li></a>
  <li class="oc-sous"><a href="voyage12.html">japon</li></a>
  <li class="oc-sous"><a href="voyage31.html">la dominique</li></a>
  <li class="oc-sous"><a href="voyage32.html">turquie</li></a>-->
  <li></li>
      </ul>
  </li>
  </li> 
  <li class="oc-onglet"><a class="oc-nav-marg" href="projet.php/cv/cvolivier.html">C.V</li></a>
  <li class="oc-onglet"><a class="oc-nav-marg" href="contact.php">contact</li></a>
  </ul>
  </nav>    
</header>    
    <h1 class="titre1">Contact</h1>
             <?php
    if (!empty($_POST["envoi"])) {
        
 

    if (isset($_POST['email']) && isset($_POST['message'])) {

    echo "string";
        
        $mail=$_POST['email'];
        $message=$_POST['message'];
       var_dump($mail);
           
            $requete="INSERT INTO message_admin(mail,message_or)
                                VALUES (\"$mail\",\"$message\")";
                    $inser= mysqli_query($connexion, $requete);
                    header("location: index.php");
                   
        

    }
       }    
    
?>
    <form method="POST" action="">
   
     <table class="tableau-form">
     <tr>
         <td><label>Email</label></td>       
        <td><input class="input" type="email" name="email" required></td>
    </tr>
    <tr>
        <td><label>Message</label></td>
        <td><textarea class="input" name="message" required></textarea></td>
    </tr>
    </table><br/>

        <input class="bouton" type="submit" name="envoi" value="envoyé">
    </form>
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