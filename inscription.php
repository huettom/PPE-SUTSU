<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "SUTZUUUU";
session_start(); 
$id=$_SESSION['id'] + 1;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "successfull connexion";
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$sexe = $_POST["sexe"];
$age = $_POST['age'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];
$id=$_SESSION['id'];
$sql = "INSERT INTO Utilisateur (nom, prenom, sexe, age, mail, mdp) VALUES ('$nom', '$prenom', '$sexe', '$age', '$email', '$mdp')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
        header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>