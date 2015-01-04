<?php
/**
 * Version 1.0 - 24/12/2014
 * Connection à la base de données
 * Création de l'objet PDO
 * **/
try{
	$bdd = new PDO('mysql:host=db4free.net;dbname=pa8bourse', 'utilisateur', 'rgtreyt', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>
