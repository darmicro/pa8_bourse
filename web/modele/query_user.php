<?php
/**
 * Version 1.0 - 24/12/2014
 * Dans ce fichier se trouve toutes les requêtes et interaction avec la BDD liées à l'utilisateur 
 * 
 * **/
 
require_once("connexiondb.php");

//Retourne True si l'utilisateur existe et le mot de passe est correct , False sinon
function connectionUser($nom, $mdp){
	
	global $bdd;
	
	$req = $bdd->prepare('SELECT nom, motpass FROM utilisateur WHERE nom = :name AND motpass = :pass');
	$req->execute(array('name' => $nom, 'pass' => $mdp));
	
	while ($donnees = $req->fetch())
	{
		if ($donnees['nom'] === $nom && $donnees['motpass'] === $mdp)
		{
			$req->closeCursor();
			return true;
		}
	}
	
	$req->closeCursor();
	
	return false;
}
?>
