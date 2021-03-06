<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Fil d'actualité</title>

    <link rel="stylesheet" href="stylenewquestion.css">
  </head>
  <body>

  	<div class="nav d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
	  <img src="sutsu.png" class="my-0 mr-md-auto font-weight-normal">
	  <nav class="my-2 my-md-0 mr-md-3 ">
		    <a class="p-2 text-dark" href="feed.php">Fil d'actualité</a>
		    <a class="p-2 text-dark" href="mesquestions.php">Mes questions</a>
	  </nav>
	</div>

	<div class="pricing-header mx-auto text-center">
	  <h1 class="display-4">Nouvelle question</h1>
	</div>



	<div class="container">
	<form method="post" onsubmit="return verifyContent()" action="new_question.php">
		<div class="form-group grouparea">
			<label for="exampleFormControlTextarea1">Exprimez votre contexte dans lequel votre question se trouve</label>
    		<textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="Description"></textarea>
		</div>
		<div class="form-group grouparea">
			<label for="exampleFormControlTextarea1">Exprimez votre question</label>
    		<textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="Question"></textarea>
		</div>
	
		<div class="row">
		    <div class="col">
		        <div class="form-group grouparea2">
					<label for="exampleFormControlTextarea1">Réponse n°1</label>
		    		<textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="Reponse_a"></textarea>
				</div>
		    </div>
		    <div class="col">
		        <div class="form-group grouparea2">
					<label for="exampleFormControlTextarea1">Réponse n°2</label>
		    		<textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="Reponse_b"></textarea>
			    </div>
		    </div>
		</div>
	


	<button type="submit" class="btn btn-outline-success marge" >Soumettre</button>
	</div>
    </form>
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