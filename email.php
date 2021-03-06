<?php include('head.inc'); ?>

		<div class="container-sm">
			<div class="card mx-auto">
  			<div class="card-body">
    			<h5 class="card-title text-center">Bienvenue à l'expérience « <?php echo($nom_experience); ?> »</h5>
    			<h6 class="card-subtitle mt-4 mb-4 text-muted text-center">Veuillez d'abord entrer votre adresse email ci-dessous :</h6>
    			<form action="php/email.php" method="post" class="needs-validation" novalidate>
  					<div class="row mb-2">
    					<div class="col-sm">
      					<input type="email" style="max-width:400px;margin:0 auto;" class="form-control" placeholder="email@example.com" name="email" <?php if(isset($_SESSION['email'])) { echo('value='.$_SESSION['email']);} ?> required>
                <?php if (htmlspecialchars($_GET['email']) == 'alreadyTaken'): ?>
                <div class="email-taken">Cette adresse email est déjà utilisée !</div>
                <?php endif; ?>
    					</div>
  				  </div>
  					<div class="envoyer mt-4 mb-2"> 
  						<button class="btn btn-primary" type="submit">Envoyer</button>
  					</div>
  				</form>
  			</div>
			</div>
		</div>

    <script src="js/survey.js"></script>

<?php include('foot.inc'); ?>