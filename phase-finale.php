<?php

$token = $_GET['email'];

?>

<?php include('head.inc'); ?>

		<div class="container-sm">
			<div class="card mx-auto" style="margin-bottom: 200px;">
  			<div class="card-body">
  				<h5 class="card-title text-center">Phase finale de l'expérience « <?php echo($nom_experience); ?> »</h5>
    			<p align="justify">Bonjour et (re)bienvenue sur l'expérience.</p>

    			<p align="justify">Pour participer à la phase finale, veuillez renseigner l'email utilisé au cours de la première partie de l'expérience :</p>

          <form action="php/choixTestFinal.php" method="post" class="needs-validation" novalidate>
            <div class="row mb-2">
              <div class="col-sm">
                <?php if ($token === 'notfound'): ?>
                  <input type="email" class="form-control is-invalid" placeholder="email@exemple.fr" name="email" style="max-width:300px;" required>
                  <div class="invalid-feedback">
                    Désolé, nous n'avons pas trouver votre email dans nos listes. Vérifiez que vous avez bien entré le même email qu'à la première phase.
                  </div>
                <?php else: ?>
                  <input type="email" class="form-control" placeholder="email@exemple.fr" name="email" style="max-width:300px;" required>
                <?php endif; ?>
              </div>
            </div>
            
            <div class="envoyer mt-4"> 
              <button class="btn btn-primary" type="submit">Suivant</button>
            </div>
  				</form>

  			 </div>
			</div>
		</div>

    <script src="js/survey.js"></script>

<?php include('foot.inc'); ?>