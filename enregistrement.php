<?php
    define('DB_SERVER','localhost');
    define('DB_USER','root');
    define('DB_PASS','root');
    $database='SUTZUUUU';
            session_start();
    $db_handle=mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
    $db_found=mysqli_select_db($db_handle,$database);

    $sql="SELECT MAX(ID) FROM clients";
    $result=mysqli_query($db_handle,$sql);
    $data1 = mysqli_fetch_row($result);       
    $_SESSION['id']=$data1[0];  
    $id=$_SESSION['id'] + 1;
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style/styleSignup.css" />
	<title>SignUp</title>
</head>
<body>
    <form class="form-horizontal" method="post" onsubmit="return verifyContent()" action="inscription.php">
	<div class="body"></div>
	<div class="gradient"></div>
	<div class="header">
		<div><span>s</span>ut<span>s</span>u</div>
	</div>
	<br>
	<div class="signup">
		<input type="text" placeholder="Nom" name="nom">
		<br>
		<input type="text" placeholder="Prenom" name="prenom">
		<br>
        <input type="radio" name="sexe" value="0"> Homme
        <input type="radio" name="sexe" value="1"> Femme<br>
		<br>
		<input type="text" placeholder="Age" name="age">
		<br>
		<input type="email" placeholder="Email" name="email">
		<br>
		<input type="password" placeholder="Mot de passe" name="mdp">

        <div class="form-group ">
            <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
        </div>
        </div>
        </form>
        
		<p class="login">Vous avez deja un compte ? <a href="index.php" class="link">Se connecter</a></p>
</body>
</html>
    