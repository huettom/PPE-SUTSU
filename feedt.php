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
$UID = $_SESSION['id'];
$IDF = $_SESSION['rep'];

// $sql = 'INSERT INTO Feedback (ID_fiche_question, ID_utilisateur_reponse, Reponse) VALUES("18",'.$UID.',"1")';
$sql = 'INSERT INTO Feedback (ID_fiche_question, ID_utilisateur_reponse, Reponse) VALUES('.$IDF.','.$UID.',1)';
echo $sql;

$reponse = $bdd->query($sql);


header('location: feed.php');


?>