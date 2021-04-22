<?php
session_start();


$_SESSION['sujet'] = $_GET['sujet'];
$_SESSION['resultIdPhase2'] = $_GET['resultId'];

include('head.inc');
?>

		<div class="container-sm">
			<div class="card mx-auto" style="margin-bottom: 200px;">
  			<div class="card-body">
    			<h5 class="card-title text-center">Merci d'avoir participé à la phase finale de l'expérience « <?php echo($nom_experience); ?> »</h5>
    			<h6 class="card-subtitle mt-4 mb-4" align="justify">Nous avons besoin de votre adresse email afin de valider l'expérience.</h6>
          <h6 class="card-subtitle mt-4 mb-4" align="justify" style="color:#dc3545;">Attention : veillez à rentrer l’adresse email avec laquelle vous avez reçu le lien de la présente étude afin de nous permettre de relier les deux parties entre elles.</h6>
    			
          <form action="php/checkEmail.php" method="post" class="needs-validation" novalidate>
            <div class="row mb-2">
              <div class="col-sm">
                <label for="exampleFormControlTextarea1">Email</label>
                <input type="email" class="form-control" placeholder="email@example.com" name="email" required>
              </div>
            </div>
            <?php 
            if(isset($_GET['em']))
            {
              if ($_GET['em'] == 'nf')
              {
                echo "<p style='color:#dc3545;'>Nous n'avons pas trouvé votre adresse email. Vérifiez que vous l'avez entré correctement.</p>";
              }
            }
            ?>
            <div class="envoyer mt-4"> 
              <button class="btn btn-primary" type="submit">Suivant</button>
            </div>
          </form>
  			</div>
			</div>

      
		</div>

    <script src="js/survey.js"></script>

<?php include('foot.inc'); ?>