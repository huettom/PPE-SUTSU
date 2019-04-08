<!doctype html>
<?php
    include('feed_php.php');
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Fil d'actualité</title>

    <link rel="stylesheet" href="stylefeed.css">
  </head>
  <body>

  	<div class="nav d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
	  <img src="sutsu.png" class="my-0 mr-md-auto font-weight-normal">
	  <nav class="my-2 my-md-0 mr-md-3 ">
		    <a class="p-2 text-dark" href="feed.php">Fil d'actualité</a>
		    <a class="p-2 text-dark" href="mesquestions.php">Mes questions</a>
	  </nav>
	</div>


	  
	   <div class="jumbotron">
	    <div class="container">

<?php
	
	session_start();
		$a=$_SESSION['rep'];
	     echo '<h2 class="display-4">Contexte</h2>
	      <p>'.$Description[0].'</p>

	      <h2 class="display-4">Question</h2>
	      <p>'.$Question[0].'</p>



	      <div class="row">
		    <div class="col">
		      <a class="btn btn-outline-primary btn-block" href="feedt.php" role="button">'.$Reponse_a[0].'</a>
		    </div>
		    <div class="col">
		      <a class="btn btn-outline-success btn-block" href="feedt2.php" role="button">'.$Reponse_b[0].'</a>
		    </div>
		  </div>';
          echo $IDF[$a];
          echo " ";
          echo "id:";
          echo $_SESSION['id'];
		  echo " ";
		  echo "rep:";
		  echo $_SESSION['rep'];
	
	?>

	    </div>
    </div>


	<footer class="footer text-muted bd-footer">
	  <div class="container">
	    <p class="float-right">
	      <a href="#">Déconnexion</a>
	    </p>
	    <p>Sutsu : réalisé par l'équipe PPE n°1810. Besoin de plus d'informations ? Contacter par mail : <a href="mailto:hugo.fridlanski@edu.ece.fr">hugo.fridlanski@edu.ece.fr</a></p>
	  </div>
	</footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>