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

/*$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "SUTZUUUU";*/
session_start(); 
// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);

$UID = $_SESSION['id'];
// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM Fiche_question WHERE ID_utilisateur = "'.$UID.'"');

$count = 0;

while ($donnees = $reponse->fetch())
{

 $Description[$count] = $donnees['Description']; 
 
 $Question[$count] = $donnees['Question'];

 $count += 1; 
}

for($i = 0 ; $i<$count ; $i++)
{
   //echo $Description[$i].' '.$Question[$i].'</br>';
  
}

    






/*

$reponse = $conn->query('SELECT * FROM Fiche_question WHERE ID_utilisateur = "'.$UID.'"');



$count = 0;

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{

 $Description[$count] = $donnees['Description']; 
 
 $Question[$count] = $donnees['Question'];

 $count += 1; 
}

for($i = 0 ; $i<$count ; $i++)
{
   //echo $Description[$i].' '.$Question[$i].'</br>';
  
}*/


$reponse->closeCursor(); // Termine le traitement de la requête 

?>