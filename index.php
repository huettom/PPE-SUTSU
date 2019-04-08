<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<title>Sutsu</title>
</head>
<body>
    <form class="form-horizontal" method="post" onsubmit="return verifyContent()" action="connexiont.php">
	<div class="body"></div>
	<div class="gradient"></div>
	<div class="header">
		<div><span>s</span>ut<span>s</span>u</div>
	</div>
	<br>
	<div class="login">
		<input type="text" placeholder="Email" name="email">
		<br>
		<input type="password" placeholder="Mot de Passe" name="password">
		<br>

                    
<?php
    define('DB_SERVER','localhost');
    define('DB_USER','root');
    define('DB_PASS','root');
    $database='SUTZUUUU';
    session_start();
    $_SESSION['nom']="";
        $_SESSION['prenom']="";
        $_SESSION['id']=0;
    $db_handle=mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
    $db_found=mysqli_select_db($db_handle,$database);
    $id=$_SESSION['id'];
    $sql="SELECT nom FROM Utilisateur WHERE IDU = $id";
    $result=mysqli_query($db_handle,$sql);
    $data = mysqli_fetch_row($result);       
    $n=$data[0];  
    
    $sql="SELECT prenom FROM Utilisateur WHERE IDU = $id";
    $result=mysqli_query($db_handle,$sql);
    $data = mysqli_fetch_row($result);     
    $p=$data[0]; 
        $_SESSION['nom']=$n;
        $_SESSION['prenom']=$p;
        $_SESSION['id']=$id;

      echo $_SESSION['message'];
        $_SESSION['message']=""; 
?>

		<div class="form-group ">
            <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Se Connecter</button>
        </div>
        
		<p class="signup">Vous n'avez pas de compte ? <a href="enregistrement.php" class="link">Inscrivez-vous</a></p>
	</div>
    </form>
</body>
</html>