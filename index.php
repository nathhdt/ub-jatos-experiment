<?php include('head.inc'); ?>

		<div class="container-sm">
			<div class="card mx-auto" style="margin-bottom: 200px;">
  			<div class="card-body">
  				<h5 class="card-title text-center">Expérience « <?php echo($nom_experience); ?> »</h5>
    			<p align="justify">Bonjour et bienvenue sur l'expérience.</p>

    			<p align="justify">Les données personnelles recueillies via ce questionnaire sont traitées sur la base de votre consentement. Vos données seront transmises aux seules personnes habilitées, lesquelles sont soumises au devoir de confidentialité, et seront conservées pendant 24 mois après la clôture de l'expérience. Elles ne sont en aucun cas utilisées à des fins commerciales.</p>

    			<p align="justify">Conformément à la loi applicable, vous disposer de différents droits pour maîtriser vos données personnelles (droit d'accès, de rectification, etc...) que vous pouvez exercer en vous adressant par courriel à <a href="mailto:patrick.bard@u-bourgogne.fr">patrick.bard@u-bourgogne.fr</a>. À la suite de ce contact, si vous estimez que vos droits ne sont pas respectés, vous avez le droit d'introduire une réclamation auprès de la CNIL.</p>

    			<h6 class="card-subtitle mt-4 mb-4" align="justify">Juste avant de commencer, vous devez certifier avoir donné votre accord pour participer à cette étude :</h6>

          <form action="php/experienceRandom.php" method="post" class="needs-validation" novalidate>
            <div class="form-check">
  			      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="rgpd" required>
              <label class="form-check-label" for="flexCheckDefault" class="text-justify">
                J'autorise ce site à conserver mes données personnelles transmises via cette expérience
              </label>
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