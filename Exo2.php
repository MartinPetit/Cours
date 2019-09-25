<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Boucles</title>
    </head>

<body>

	<?php



		$nombre_trouver = rand(0,100);
		$tentatives = 0;
		$trouver = false;

		




		do {
			
		

	?>

	
		<form action = "" method="POST">
			Entrer votre valeur : <input type="number" name="nbre"/> <br/>
			<input type="submit" name="Envoyer">
		</form>
		

	<?php
		if (isset($_POST['Envoyer']))
	{	


		$nombre_saisi =	 $_POST['nbre'];

	}

		else {

			echo "Vous n'avez rien rentré";
		}
	$tentatives++;

	if ($nombre_saisi == $nombre_trouver) {
		$trouver = true;
	}


	} while ($trouver !== false);

	echo $tentatives;
	?>
</body>

</html>