<?php include('head.inc'); ?>
		
		<div class="container-sm">
			<div class="card mx-auto">
  			<div class="card-body">
    			<h5 class="card-title text-center">Bienvenue à l'expérience « <?php echo($nom_experience); ?> »</h5>
    			<h6 class="card-subtitle mt-4 mb-4 text-muted">Veuillez d'abord compléter le questionnaire ci-dessous :</h6>
    			<form action="php/questionnaire.php" method="post" class="needs-validation" novalidate>
    				<div class="row mb-2">
    					<div class="col-sm">
      					<input type="text" class="form-control" placeholder="Nom" name="nom" <?php if(session_id()){echo('value='.$_SESSION['nom']);} ?> required>
    					</div>
    					<div class="col-sm">
      					<input type="text" class="form-control" placeholder="Prénom" name="prenom" <?php if(session_id()){echo('value='.$_SESSION['prenom']);} ?> required>
    					</div>
  					</div>

  					<div class="row mb-2">
    					<div class="col-sm">
      					<input type="email" class="form-control" placeholder="email@example.com" name="email" <?php if(session_id()){echo('value='.$_SESSION['email']);} ?> required>
                <?php if (htmlspecialchars($_GET['email']) == 'alreadyTaken'): ?>
                <div class="email-taken">Cette adresse email est déjà utilisée !</div>
                <?php endif; ?>
    					</div>
      				<div class="col-sm">
        				<select class="form-select" name="age" required>
   								<option value="" disabled>Age</option>
      						<option value="1">1</option>
      						<option value="2">2</option>
      						<option value="3">3</option>
      						<option value="4">4</option>
      						<option value="5">5</option>
      						<option value="6">6</option>
      						<option value="7">7</option>
      						<option value="8">8</option>
      						<option value="9">9</option>
      						<option value="10">10</option>
      						<option value="11">11</option>
      						<option value="12">12</option>
      						<option value="13">13</option>
      						<option value="14">14</option>
      						<option value="15">15</option>
      						<option value="16">16</option>
      						<option value="17">17</option>
      						<option value="18">18</option>
      						<option value="19">19</option>
      						<option value="20">20</option>
      						<option value="21">21</option>
      						<option value="22">22</option>
      						<option value="23">23</option>
      						<option value="24">24</option>
      						<option value="25">25</option>
      						<option value="26">26</option>
      						<option value="27">27</option>
      						<option value="28">28</option>
      						<option value="29">29</option>
      						<option value="30">30</option>
      						<option value="31">31</option>
      						<option value="32">32</option>
      						<option value="33">33</option>
      						<option value="34">34</option>
      						<option value="35">35</option>
      						<option value="36">36</option>
      						<option value="37">37</option>
      						<option value="38">38</option>
      						<option value="39">39</option>
      						<option value="40">40</option>
      						<option value="41">41</option>
      						<option value="42">42</option>
      						<option value="43">43</option>
      						<option value="44">44</option>
      						<option value="45">45</option>
      						<option value="46">46</option>
      		        <option value="47">47</option>
      						<option value="48">48</option>
      						<option value="49">49</option>
      						<option value="50">50</option>
      						<option value="51">51</option>
      						<option value="52">52</option>
      						<option value="53">53</option>
      						<option value="54">54</option>
      						<option value="55">55</option>
      						<option value="56">56</option>
      						<option value="57">57</option>
      						<option value="58">58</option>
      						<option value="59">59</option>
      						<option value="60">60</option>
      						<option value="61">61</option>
      						<option value="62">62</option>
      						<option value="63">63</option>
      						<option value="64">64</option>
      						<option value="65">65</option>
      						<option value="66">66</option>
      						<option value="67">67</option>
      						<option value="68">68</option>
      						<option value="69">69</option>
      						<option value="70">70</option>
      						<option value="71">71</option>
      						<option value="72">72</option>
      						<option value="73">73</option>
      						<option value="74">74</option>
      						<option value="75">75</option>
      						<option value="76">76</option>
                  <option value="77">77</option>
      						<option value="78">78</option>
      						<option value="79">79</option>
      						<option value="80">80</option>
      						<option value="81">81</option>
      						<option value="82">82</option>
      						<option value="83">83</option>
      						<option value="84">84</option>
      						<option value="85">85</option>
      						<option value="86">86</option>
      						<option value="87">87</option>
      						<option value="88">88</option>
      						<option value="89">89</option>
      						<option value="90">90</option>
  							</select>
      				</div>
  				  </div>

  					<div class="row mt-3 mb-3">
    					<div class="col-sm form-inline">
      					<label class="form-check-label" for="radioHomme">Genre :</label>
      				</div>
      				<div class="col form-inline radio">
    						<input class="form-check-input radiocheck" type="radio" name="genre" id="radioHomme" value="Homme" required>
      					<label class="form-check-label" for="radioHomme">Homme</label>
      					<input class="form-check-input radiocheck" type="radio" name="genre" id="radioFemme" value="Femme" required>
  							<label class="form-check-label" for="radioFemme">Femme</label>
  							<input class="form-check-input radiocheck" type="radio" name="genre" id="radioAutre" value="Autre" required>
  							<label class="form-check-label" for="radioAutre">Autre</label>
    					</div>
  					</div>

  					<div class="row mt-2 mb-2">
    					<div class="col-sm form-inline">
      					<label class="col-form-label align-middle" for="niveauEtudes">Votre niveau d'études :</label>
      				</div>
      				<div class="col-sm form-inline">
    						<select class="form-select" id="niveauEtudes" name="etudes" required>
 									<option selected value="" disabled>Niveau d'études</option>
  								<option value="CAP/BEP">CAP/BEP</option>
  								<option value="Bac">Bac</option>
  								<option value="Bac+1">Bac+1</option>
  								<option value="Bac+2">Bac+2</option>
  								<option value="Bac+3">Bac+3</option>
  								<option value="Bac+4">Bac+4</option>
  								<option value="Bac+5">Bac+5</option>
  								<option value="Bac+6-8">Bac+6-8</option>
								</select>
    					</div>
  					</div>

  					<div class="row mt-2 mb-2">
    					<div class="col-sm form-inline">
      					<label class="col-form-label align-middle" for="filiere">Votre filière :</label>
      				</div>
      				<div class="col-sm form-inline">
    						<select class="form-select" id="filiere" name="filiere" required>
 									<option selected value="" disabled>Filière</option>
  								<option value="Économie-gestion">Économie-gestion</option>
  								<option value="roit & sciences politiques">Droit & sciences politiques</option>
  								<option value="Sciences">Sciences</option>
  								<option value="Sciences humaines & sociales">Sciences humaines & sociales</option>
  								<option value="Sciences de l'ingénieur">Sciences de l'ingénieur</option>
  								<option value="Médecine">Médecine</option>
  								<option value="Sport (STAPS)">Sport (STAPS)</option>
  								<option value="Théologie">Théologie</option>
  								<option value="Arts">Arts</option>
  								<option value="Lettres & langues">Lettres & langues</option>
  								<option value="Autre">Autre</option>
								</select>
    					</div>
  					</div>

  					<div class="row mt-2 mb-2">
    					<div class="col-sm form-inline">
      					<label class="col-form-label align-middle" for="filiere">Votre langue maternelle :</label>
      				</div>
      				<div class="col-sm form-inline">
    						<select class="form-select" name="langueMaternelle" required>
 									<option selected value="" disabled>Langue maternelle</option>
  								<option value="Français">Français</option>
  								<option value="Anglais">Anglais</option>
  								<option value="Allemand">Allemand</option>
  								<option value="(à rajouter)">(à rajouter)</option>
  								<option value="Autre">Autre</option>
								</select>
    					</div>
  					</div>

  					<div class="row mt-3 mb-3">
    					<div class="col-sm form-inline">
      					<label class="form-check-label" for="radioHomme">Connaissez-vous la langue <?php echo($langue_x); ?> ?</label>
      				</div>
      				<div class="col form-inline radio">
    						<input class="form-check-input radiocheck" type="radio" name="langueX" id="radioLangueXOui" value="Oui" required>
      					<label class="form-check-label" for="radioLangueXOui">Oui</label>
      					<input class="form-check-input radiocheck" type="radio" name="langueX" id="radioLangueXNotions" value="Notions" required>
      					<label class="form-check-label" for="radioLangueXNotions">J'ai quelques notions</label>
      					<input class="form-check-input radiocheck" type="radio" name="langueX" id="radioLangueXNon" value="Non" required>
  							<label class="form-check-label" for="radioLangueXNon">Non</label>
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