<?php
/**
 * Version 1.0 - 24/12/2014
 * Dans ce fichier se trouve toutes les requêtes et interaction avec la BDD liées à l'utilisateur 
 * 
 * **/
require_once("../modele/query_user.php");

if (connectionUser($_POST["username"], $_POST["password"]))
{
	//Si la connexion de l'utilisateur s'est bien passé, alors on creé une session
	session_start ();
	$_SESSION['login'] = $mon;
	header('Location: ../index.php');
}

else
{
	header('Location: ../page_login.php?erreur=1');
	
}

?>
