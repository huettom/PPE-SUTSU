<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "SUTZUUUU";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "successfull connexion";
// username and password sent from form
$myusername = $_POST['email'];
$mypassword = $_POST['password'];
$sql = "SELECT IDU, nom, prenom FROM Utilisateur WHERE mail = '$myusername' AND mdp = '$mypassword'";
echo "lourd";
echo $sql;
$result = $conn->query($sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$ID = $row["IDU"];
$nom = $row["nom"];
$prenom = $row["prenom"];
$count = mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count == 1) {
    $_SESSION['login_user'] = $myusername;
    $_SESSION['id'] = $ID;
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;

    echo "success";
        header('Location: feed.php');
}
else
{
    echo "Your Login Name or Password is invalid";
}
?>