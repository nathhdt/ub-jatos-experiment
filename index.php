<?php include('head.inc'); ?>

		<div class="container-sm">
			<div class="card mx-auto" style="margin-bottom: 200px;">
  			<div class="card-body">
  				<h5 class="card-title text-center">Expérience « <?php echo($nom_experience); ?> »</h5>
    			<h6 align="justify" style="margin-top: 40px;margin-bottom:20px;">Confidentialité des informations.</h6>

    			<p align="justify">Toutes les informations qui seront recueillies seront strictement confidentielles et seulement accessibles par les chercheurs impliqués dans cette étude. Votre adresse email sera seulement utilisée pour vous envoyer le lien de la deuxième partie de l’étude, et vous relier à votre deuxième passation. Après cela, les données seront anonymisées afin que nous ne puissions pas les relier à vous. Vos données seront conservées pendant 24 mois après la clôture de l’expérience et protégées selon la loi informatique et liberté en vigueur, et notamment le règlement (UE) 2016/679 du Parlement Européen et du Conseil du 27 avril 2016 relatif à la protection des personnes physiques à l’égard du traitement des données à caractère personnel et à la libre circulation de ces données (RGPD). Les données seront en effet utilisées à des fins statistiques et non pour vous évaluer individuellement.</p>

    			<p align="justify">Conformément à la loi applicable, vous disposez de différents droits pour maîtriser vos données personnelles (droit d'accès, de rectification, etc...) que vous pouvez exercer en vous adressant par courriel à <a href="mailto:benedicte.charronnat@u-bourgogne.fr">benedicte.charronnat@u-bourgogne.fr</a>.</p>

    			<h6 class="card-subtitle mt-4 mb-4" align="justify">En cochant la case ci-dessous, vous certifiez avoir pris connaissances des conditions de l’utilisation de vos données et donnez votre accord pour participer à l’étude de manière volontaire :</h6>

          <form action="php/experienceRandom.php" method="post" class="needs-validation" novalidate>
            <div class="form-check">
  			      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="rgpd" required>
              <label class="form-check-label" for="flexCheckDefault" class="text-justify">
                Je certifie avoir donné mon accord pour participer à cette étude
              </label>
            </div>
            
            <p style="color:#c0392b;margin-top:30px;margin-bottom:30px;">Attention : il est fortement recommandé d'utiliser le navigateur <strong>Google Chrome</strong>, auquel cas l'expérience peut ne pas se dérouler correctement.</p>

            <div class="envoyer mt-4"> 
              <button class="btn btn-primary" type="submit">Suivant</button>
            </div>
  				</form>

  			 </div>
			</div>
		</div>

    <script src="js/survey.js"></script>

<?php include('foot.inc'); ?>