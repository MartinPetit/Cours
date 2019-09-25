<?php
session_start();
include "connexion.php";
	$bdd = connect();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Boucles</title>
    </head>

<body>

	<?php




		If (isset($_SESSION['tab'])) {
		$_SESSION['tab'] = [];
	}

		If (check($_POST)) {
		$user = [$_POST['nom1'], $_POST['prenom1'], $_POST['nbre']];
		var_dump($user);
	}
	


	function check($post) {
		if (isset($post['send'])) {
			if (!empty($post['nom1']) && !empty($post['prenom1']) && !empty($post['mail'])) {
				return true;
			}
			return false;
		}
		return false;
	}
	


	?>


	<form action = "" method="POST">
			Entrer votre nom : <input type="text" name="nom1"/> <br/>
			Entrer votre prenom : <input type="text" name="prenom1"/> <br/>
			Entrer votre mail : <input type="text" name="mail"/> <br/>
			<input type="submit" name="Envoyer">
		</form>

</body>

</html>


//demande a l'utilisatur nom prenom numero de téléphone et les stocker dans un tableau