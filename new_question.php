<?php
    $servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "SUTZUUUU";
    session_start();
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); }
 	$Description = $_POST['Description']; 
 	$UID = $_SESSION['id'];
 	$ID_utilisateur= $UID;
 	$Reponse_a = $_POST['Reponse_a'];
 	$Reponse_b = $_POST['Reponse_b'];
 	$Question  = $_POST['Question'];

 	
$sql = "INSERT INTO Fiche_question (Description,ID_utilisateur,Reponse_a,Reponse_b,Question) VALUES ('$Description','$UID','$Reponse_a','$Reponse_b','$Question')";
if ($conn->query($sql) === TRUE) {
   echo "New record created successfully";
        header('location: mesquestions.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


?>


