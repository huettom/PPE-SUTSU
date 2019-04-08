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
echo $_SESSION['id'];

$sql2 = 'SELECT min(ID_fiche) FROM Fiche_question WHERE ID_fiche NOT IN (SELECT ID_fiche_question FROM Feedback WHERE ID_utilisateur_reponse = "'.$UID.'") AND ID_utilisateur != "'.$UID.'"';
echo $sql2;
$reponse2 = $bdd->query($sql2);
while($donnees2 = $reponse2->fetch())
{
	$IDF_min = $donnees2[0];
}

echo " ";
echo $IDF_min;
$_SESSION['rep']=$IDF_min;

$sql = 'SELECT * FROM Fiche_question WHERE ID_fiche = '.$IDF_min.'';
$reponse = $bdd->query($sql);
while ($donnees = $reponse->fetch())
{
 //echo "coucou2";
 $Description[0] = $donnees['Description']; 
 //echo "coucou2";
 //echo $Description[$count2];
 
 $Question[0] = $donnees['Question'];
 //echo "coucou2";
// echo $Question[$count2];


 $Reponse_a[0] = $donnees['Reponse_a'];
 //echo "coucou2";
 //echo $Question[$count2];


 $Reponse_b[0] = $donnees['Reponse_b'];
 //echo "coucou2";
 //echo $Question[$count2];
 
 $IDF[0] = $donnees['ID_fiche'];
 

}
// On récupère tout le contenu de la table jeux_video
//$sql = 'SELECT * FROM Fiche_question WHERE ID_fiche != (SELECT ID_fiche_question FROM Feedback WHERE ID_utilisateur_reponse = "'.$UID.'") AND ID_utilisateur != "'.$UID.'"';
/*$sql = 'SELECT * FROM Fiche_question WHERE ID_fiche NOT IN (SELECT ID_fiche_question FROM Feedback WHERE ID_utilisateur_reponse != '.$UID.') AND ID_utilisateur != '.$UID.'' ;

echo $sql;

$reponse = $bdd->query($sql);


$count2 = 0;
//echo "coucou";
while ($donnees = $reponse->fetch())
{
 //echo "coucou2";
 $Description[$count2] = $donnees['Description']; 
 //echo "coucou2";
 //echo $Description[$count2];
 
 $Question[$count2] = $donnees['Question'];
 //echo "coucou2";
// echo $Question[$count2];


 $Reponse_a[$count2] = $donnees['Reponse_a'];
 //echo "coucou2";
 //echo $Question[$count2];


 $Reponse_b[$count2] = $donnees['Reponse_b'];
 //echo "coucou2";
 //echo $Question[$count2];
 
 $IDF[$count2] = $donnees['ID_fiche'];
 $count2 += 1; 

}
*/



//SELECT * FROM Fiche_question WHERE NOT EXISTS (SELECT ID_fiche_question FROM Feedback WHERE ID_utilisateur_reponse != 1) AND ID_utilisateur != 1

?>