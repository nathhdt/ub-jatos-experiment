<?php
session_start();

// On récupère le mail de l'expérience JATOS
$_SESSION['sujet'] = $_GET['sujet'];
$_SESSION['resultId'] = $_GET['resultId'];

include('head.inc');
?>

    <div class="container-sm">
      <div class="card mx-auto" style="margin-bottom: 200px;">
        <div class="card-body">
          <h5 class="card-title text-center">Merci d'avoir participé à la première phase de l'expérience « <?php echo($nom_experience); ?> »</h5>
          <h6 class="card-subtitle mt-4 mb-4" align="justify">Encore quelques petites informations, et promis c'est fini.</h6>
          <h6 class="card-subtitle mt-4 mb-4" align="justify">Tout d’abord, nous aurons besoin d’une adresse mail valide que vous consultez régulièrement. Elle sera seulement utilisée pour vous envoyer le lien de la seconde partie de l’étude dans une semaine et elle nous permettra de relier les données recueillies aujourd’hui et la semaine prochaine.</h6>
          <form action="php/questionnairePhase1.php" method="post" class="needs-validation" novalidate>

            <div class="row mb-2">
              <div class="col-sm">
                <input type="email" class="form-control" placeholder="email@example.com" name="email" required>
              </div>
              <div class="col-sm">
                <select class="form-select" name="age" required>
                  <option value="" disabled selected>Année de naissance</option>
                  <option value="2020">2020</option>
                  <option value="2019">2019</option>
                  <option value="2018">2018</option>
                  <option value="2017">2017</option>
                  <option value="2016">2016</option>
                  <option value="2015">2015</option>
                  <option value="2014">2014</option>
                  <option value="2013">2013</option>
                  <option value="2012">2012</option>
                  <option value="2011">2011</option>
                  <option value="2010">2010</option>
                  <option value="2009">2009</option>
                  <option value="2008">2008</option>
                  <option value="2007">2007</option>
                  <option value="2006">2006</option>
                  <option value="2005">2005</option>
                  <option value="2004">2004</option>
                  <option value="2003">2003</option>
                  <option value="2002">2002</option>
                  <option value="2001">2001</option>
                  <option value="2000">2000</option>
                  <option value="1999">1999</option>
                  <option value="1998">1998</option>
                  <option value="1997">1997</option>
                  <option value="1996">1996</option>
                  <option value="1995">1995</option>
                  <option value="1994">1994</option>
                  <option value="1993">1993</option>
                  <option value="1992">1992</option>
                  <option value="1991">1991</option>
                  <option value="1990">1990</option>
                  <option value="1989">1989</option>
                  <option value="1988">1988</option>
                  <option value="1987">1987</option>
                  <option value="1986">1986</option>
                  <option value="1985">1985</option>
                  <option value="1984">1984</option>
                  <option value="1983">1983</option>
                  <option value="1982">1982</option>
                  <option value="1981">1981</option>
                  <option value="1980">1980</option>
                  <option value="1979">1979</option>
                  <option value="1978">1978</option>
                  <option value="1977">1977</option>
                  <option value="1976">1976</option>
                  <option value="1975">1975</option>
                  <option value="1974">1974</option>
                  <option value="1973">1973</option>
                  <option value="1972">1972</option>
                  <option value="1971">1971</option>
                  <option value="1970">1970</option>
                  <option value="1969">1969</option>
                  <option value="1968">1968</option>
                  <option value="1967">1967</option>
                  <option value="1966">1966</option>
                  <option value="1965">1965</option>
                  <option value="1964">1964</option>
                  <option value="1963">1963</option>
                  <option value="1962">1962</option>
                  <option value="1961">1961</option>
                  <option value="1960">1960</option>
                  <option value="1959">1959</option>
                  <option value="1958">1958</option>
                  <option value="1957">1957</option>
                  <option value="1956">1956</option>
                  <option value="1955">1955</option>
                  <option value="1954">1954</option>
                  <option value="1953">1953</option>
                  <option value="1952">1952</option>
                  <option value="1951">1951</option>
                  <option value="1950">1950</option>
                  <option value="1949">1949</option>
                  <option value="1948">1948</option>
                  <option value="1947">1947</option>
                  <option value="1946">1946</option>
                  <option value="1945">1945</option>
                  <option value="1944">1944</option>
                  <option value="1943">1943</option>
                  <option value="1942">1942</option>
                  <option value="1941">1941</option>
                  <option value="1940">1940</option>
                  <option value="1939">1939</option>
                  <option value="1938">1938</option>
                  <option value="1937">1937</option>
                  <option value="1936">1936</option>
                  <option value="1935">1935</option>
                  <option value="1934">1934</option>
                  <option value="1933">1933</option>
                  <option value="1932">1932</option>
                  <option value="1931">1931</option>
                  <option value="1930">1930</option>
                  <option value="1929">1929</option>
                  <option value="1928">1928</option>
                  <option value="1927">1927</option>
                  <option value="1926">1926</option>
                  <option value="1925">1925</option>
                  <option value="1924">1924</option>
                  <option value="1923">1923</option>
                  <option value="1922">1922</option>
                  <option value="1921">1921</option>
                  <option value="1920">1920</option>
                  <option value="1919">1919</option>
                  <option value="1918">1918</option>
                  <option value="1917">1917</option>
                  <option value="1916">1916</option>
                  <option value="1915">1915</option>
                  <option value="1914">1914</option>
                  <option value="1913">1913</option>
                  <option value="1912">1912</option>
                  <option value="1911">1911</option>
                  <option value="1910">1910</option>
                  <option value="1909">1909</option>
                  <option value="1908">1908</option>
                  <option value="1907">1907</option>
                  <option value="1906">1906</option>
                  <option value="1905">1905</option>
                  <option value="1904">1904</option>
                  <option value="1903">1903</option>
                  <option value="1902">1902</option>
                  <option value="1901">1901</option>
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
                  <option value="Autre">Autre</option>
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
                <select class="form-select" id="filiere" name="filiere" onchange="showDiv('hidden_div', this);showDiv('hidden_div2', this)" required>
                  <option selected value="" disabled>Filière</option>
                  <option value="Économie-gestion">Économie-gestion</option>
                  <option value="Droit & sciences politiques">Droit & sciences politiques</option>
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
              <div id="hidden_div" class="col-sm form-inline">
                <label class="col-form-label align-middle" for="filiereAutre">Vous pouvez préciser :</label>
              </div>
              <div id="hidden_div2" class="col-sm form-inline">
                <input type="text" class="form-control" placeholder="..." name="filiereAutreInput">
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
                  <option value="Mandarin">Mandarin</option>
                  <option value="Hindi">Hindi</option>
                  <option value="Espagnol">Espagnol</option>
                  <option value="Arabe">Arabe</option>
                  <option value="Bengali">Bengali</option>
                  <option value="Russe">Russe</option>
                  <option value="Portugais">Portugais</option>
                  <option value="Indonésien">Indonésien</option>
                  <option value="Allemand">Allemand</option>
                  <option value="Japonais">Japonais</option>
                  <option value="Cantonais">Cantonais</option>
                  <option value="Coréen">Coréen</option>
                  <option value="Turc">Turc</option>
                  <option value="Italien">Italien</option>
                  <option value="Autre">Autre</option>
                </select>
              </div>
            </div>

            <div class="row mt-3 mb-3">
              <div class="col-sm form-inline">
                <label class="form-check-label" for="radioHomme">Avant cette étude, saviez-vous parler le <?php echo($langue_x); ?> ?</label>
              </div>
              <div class="col form-inline radio">
                <input class="form-check-input radiocheck" type="radio" name="langueX" id="radioLangueXOui" value="Oui" required>
                <label class="form-check-label" for="radioLangueXOui">Oui</label>
                <input class="form-check-input radiocheck" type="radio" name="langueX" id="radioLangueXNon" value="Non" required>
                <label class="form-check-label" for="radioLangueXNon">Non</label>
              </div>
            </div>






            <div class="row mt-3 mb-3">
              <div class="col-sm form-inline">
                <label class="form-check-label" for="radioHomme">Avant cette étude, aviez-vous quelques notions de <?php echo($langue_x); ?> ?</label>
              </div>
              <div class="col form-inline radio">
                <input class="form-check-input radiocheck" type="radio" name="notionsLangueX" id="radioNotionsLangueXOui" value="Oui" required>
                <label class="form-check-label" for="radioNotionsLangueXOui">Oui</label>
                <input class="form-check-input radiocheck" type="radio" name="notionsLangueX" id="radioNotionsLangueXNon" value="Non" required>
                <label class="form-check-label" for="radioNotionsLangueXNon">Non</label>
              </div>
            </div>









            <div class="envoyer mt-4"> 
              <button class="btn btn-primary" type="submit">Suivant</button>
            </div>
          </form>
        </div>
      </div>

      
    </div>

    <script>
      function showDiv(divId, element)
      {
        document.getElementById(divId).style.display = element.value == "Autre" ? 'block' : 'none';
      }
    </script>
    <script src="js/survey.js"></script>

<?php include('foot.inc'); ?>