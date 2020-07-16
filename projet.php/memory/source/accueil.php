<?php
include("class_oc.php");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../style/accueil.css">
	<link rel="stylesheet" type="text/css" href="../style/header.css">
	<title>memory</title>

</head>
<body>
	<header>
			<?php include ('header.php'); ?>
	</header>
	<main>
		
		<h1 class="oc-h1-accueil">SCORE</h1>
		<div class="oc-div-socre">
			<thead>
				<tr class="thead">
					<td>login</td>
       
					<td>points</td>
				</tr>
				
			</thead>
   

		<?php
		score();
		?>
		</div>
	</main>
</body>
</html>