<?php
header('Location: minichat.php');
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=exomc;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée


if (isset($_POST['send'])) {
	if (!empty($_POST['pseudo']) && !empty($_POST['message'])) {


$req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES(?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));

}

}

// Redirection du visiteur vers la page du minichat

?>