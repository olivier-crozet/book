<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Demander de l'aide</title>
    <link rel="stylesheet" type="text/css" href="../css/proposer_son_aide.css">
     <link rel="stylesheet" type="text/css" href="../css/accueil.css">
    <link rel="icon" type="image/png" href="../pics/icon/jeMePropose.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/oc.css">


</head>

     <div id="container-mise-en-page">

<div class="header-logo-title">
            <img src="../pics/icon/jeMePropose.png" alt="je me propose logo" title="Site d'entraide">
            <h1>Je-me-propose.com</h1>
        </div>

        <header id ="oc-header-proposer"  class="block-accueil">
            <?php include "../source/header.php";
                include"fonction_aidant.php";  ?>

        </header>
<body>
	<main>
		<h1 id="titre"> Bonjour, <?php ecrire_login_by_id() ?>: proposez votre aide</h1>
		<div class="formulaire">
        <form method="post" action="" >
		<!-- Département -->
		<label for="Region">Votre région</label>
        <select name="Region" id="Region">
            <option value="Grand_Est">Grand-Est</option>
            <option value="Nouvelle_Aquitaine">Nouvelle-Aquitaine</option>
            <option value="Auvergne">Auvergne</option>
            <option value="Bourgogne">Bourgogne</option>
            <option value="Bretagne">Bretagne</option>
            <option value="centre">Centre-Val de Loire</option>
            <option value="Centre_Val_de_looire">Corse</option>
            <option value="Hauts_de_France">Hauts-de-France</option>
            <option value="ile_de_France">Ile-de-France</option>
            <option value="Occitanie">Occitanie</option>
            <option value="Normandie">Normandie</option>
            <option value="Pays_de_la_loire">Pays de la Loire</option>
            <option value="Paca">Paca</option>
        </select><br/>
        <!-- Date -->
        <label for="Date_dispo">Date de disponibilité</label>
        <input type="date" id="Date_dispo" name="Date_dispo"><br/>
        <!-- Heure -->
        <label for="Heure_dispo">Heure de disponibilité</label>
        <select name="heure_dispo">
            <option value="0">00:00</option>
            <option value="1">01:00</option>
            <option value="2">02:00</option>
            <option value="3">03:00</option>
            <option value="4">04:00</option>
            <option value="5">05:00</option>
            <option value="6">06:00</option>
            <option value="7">07:00</option>
            <option value="8">8:00</option>
            <option value="9">9:00</option>
            <option value="10">10:00</option>
            <option value="11">11:00</option>
            <option value="12">12:00</option>
            <option value="13">13:00</option>
            <option value="14">14:00</option>
            <option value="15">15:00</option>
            <option value="16">16:00</option>
            <option value="17">17:00</option>
            <option value="18">18:00</option>
            <option value="19">19:00</option>
            <option value="20">20:00</option>
            <option value="21">21:00</option>
            <option value="22">22:00</option>
            <option value="23">17:00</option>
        </select><br/>
        <!-- Raisons -->
        <label for="Raisons">Raison</label><br/>
        <input type="text_aera" name="raison">
        <input type="submit" name="validation_dispo" value="Valider">
        
	</form>
</div>
    <?php
    insertion_aidant()
    ?>
	</main>
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