<!doctype html>
<?php include('mes_questions.php'); ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Fil d'actualité</title>

    <link rel="stylesheet" href="stylemesquestions.css">
  </head>
  <body>

  	<div class="nav d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
	  <img src="sutsu.png" class="my-0 mr-md-auto font-weight-normal">
	  <nav class="my-2 my-md-0 mr-md-3 ">
		    <a class="p-2 text-dark" href="feed.html">Fil d'actualité</a>
		    <a class="p-2 text-dark" href="mesquestions.php">Mes questions</a>
		    <?php
    define('DB_SERVER','localhost');
    define('DB_USER','root');
    define('DB_PASS','root');
    $database='SUTZUUUU';
    session_start();
    
        echo $_SESSION['antoine'];
?>
	  </nav>
	</div>

	<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
	  <h1 class="display-4">Mes questions</h1>
	  <p class="lead">Vous trouverez ici le reporting concernant vos questions.</p>
	</div>

	<div class="container marge">
	<a href="newquestion.php"><button type="button" class="btn btn-outline-success">Nouvelle question</button></a>
	</div>

	<div class="container">
	<div class="row">

		<?php 

		for($a = 0 ; $a< $count; $a++)
	  {
   echo'<div class="col-lg-4 col-md-6 col-sm-12">
	    <div class="card mb-3 shadow-sm">
	      <div class="card-header">
	        <h4 class="my-0 font-weight-normal">Question 1</h4>
	      </div>
	      <div class="card-body">
	        <ul class="list-unstyled mt-3 mb-4">
	          <li>Contexte : </li>
	          <li>'.$Description[$a].'</li>
	          <li>Question : </li>
	          <li>'.$Question[$a].'</li>
	        </ul>
	        <a href="monreporting.html"><button type="button" class="btn btn-lg btn-block btn-primary" >Voir le reporting</button></a>
	      </div>
	    </div>
	    </div>';
	}
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