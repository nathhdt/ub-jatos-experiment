<?php
session_start();
include('head.inc');
?>

		<div class="container-sm">
			<div class="card mx-auto" style="margin-bottom: 200px;">
  			<div class="card-body">
    			<h5 class="card-title text-center">Merci d'avoir participé à l'expérience « <?php echo($nom_experience); ?> »</h5>
    			<h6 class="card-subtitle mt-4 mb-4" align="justify">C’est terminé ! Nous vous remercions encore sincèrement pour votre participation !<br><br>Si vous avez la moindre remarque ou question concernant l’étude, vous pouvez en faire part à l’adresse <a href="lauraline_mulier@etu.u-bourgogne.fr">lauraline_mulier@etu.u-bourgogne.fr</a> ou dans l’encadré suivant (problèmes de connexions, d’affichage, dérangé pendant la passation, difficultés rencontrées sur certaines tâches, etc.).<br><br>Nous vous remercions encore sincèrement d’avoir donné de votre temps pour réaliser ces passations. Prenez bien soin de vous !</h6>
    			
          <form action="php/commentaires.php" method="post" class="needs-validation" novalidate>
            <div class="row mb-2">
              <div class="col-sm">
                <label for="exampleFormControlTextarea1">Commentaires (facultatif)</label>
                <textarea class="form-control" id="commentaires" name="commentaires" rows="5" required></textarea>
              </div>
            </div>
            <div class="envoyer mt-4"> 
              <button class="btn btn-primary" type="submit">Terminer</button>
            </div>
          </form>
  			</div>
			</div>

      
		</div>

    <script src="js/survey.js"></script>

<?php include('foot.inc'); ?>