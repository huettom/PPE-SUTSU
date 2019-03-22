<?php 

try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=SUTZUUUU;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

session_start(); 

$UID = $_SESSION['id'];
// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM Feedback WHERE ID_utilisateur_reponse != "'.$UID.'"');

while ($donnees = $reponse->fetch())
{

 $Description[$count] = $donnees['Description']; 
 
 $Question[$count] = $donnees['Question'];

 $count += 1; 
}


?>