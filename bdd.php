<?php
try
{
    // Descomentar esta línea para que le funcione a Andrea
	$bdd = new PDO('mysql:host=localhost;dbname=calendario;charset=utf8', 'root', '');
	
	// Para desarrollar en Cloud9, luego comentar esta línea
	//$bdd = new PDO('mysql:host='.getenv('IP').';dbname=biziondo;charset=utf8', getenv('C9_USER'), '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
