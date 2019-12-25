<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
              "use strict";
              window.addEventListener(
                "load",
                function() {
                  // Fetch all the forms we want to apply custom Bootstrap validation styles to
                  var forms = document.getElementsByClassName("needs-validation");
                  // Loop over them and prevent submission
                  var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener(
                      "submit",
                      function(event) {
                        if (form.checkValidity() === false) {
                          event.preventDefault();
                          event.stopPropagation();
                        }
                        form.classList.add("was-validated");
                      },
                      false
                    );
                  });
                },
                false
              );
            })();
          </script>
    </head>
    <body>
        <div class="container">
            <h1>Déposer un projet</h1>
            <hr>
            <form method="#" action="#" novalidate class="needs-validation" >
                <!-- <div class="d-flex justify-content-center align-items-center divCon mt-5">
                    <form
                      class="border border-light p-5 divConnect needs-validation"
                      action="#"
                      novalidate
                    >
                      <img
                        class="img-fluid rounded-circle"
                        src="./img/fav_png150vct.png"
                        alt="Logo"
                      />
                      <p class="h4 mb-4">S'inscrire en tant que Réalisateur de Projet</p>
                      </div> -->
              
                <div class="form-group">
                    <label for="titre_projet" style="font-weight: bold;">Titre </label>
                    <input type="text" class="form-control   " id="titre_projet" aria-describedby="titre_projet" name="titre_projet" placeholder="Le nom de votre projet" required>
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                    
                </div>
                <div class="form-group">
                <label style="font-weight: bold;">Type de projet?</label>
                <select class=form-control>
                    <option value="0">Sélectionner un type de projet</option>
                    <option value=un>1. Développement web</option>
                    <option value=deux>2. Développement mobile</option>
                    <option value=trois>3. Développement logiciel</option>
                    <option value=quatre>4. Infographie, design, graphisme</option>
                    <option value=cinq>5. Référencement web</option>
                    <option value=six>6. Système réseaux, sécurité</option>
                    <option value=sept>7. Marketing et communication</option>
                    <option value=huit>8. Autres...</option>
                    
                </select>   
                </div>
                <div class="form-group">
                    <label for="desc_projet" style="font-weight: bold;">Description </label>
                    <textarea name="desc_projet" class="form-control  " id="desc_projet" cols="30" rows="10" placeholder="Décrivez-nous en détail votre projet, les objectifs?, les attentes?, problémes?" required></textarea>
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group ">
                            <label for="date_debut" style="font-weight: bold;">Date début </label>
                            <input type="date" class="form-control " id="date_debut" aria-describedby="date_debut" name="date_debut" placeholder="Quel est la date de début pour votre projet?" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="date_butoir_projet" style="font-weight: bold;">Date butoir </label>
                            <input type="date" class="form-control " id="date_butoir_projet" aria-describedby="date_butoir_projet" name="date_butoir_projet" placeholder="Quel est la date de fin pour votre projet?" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                         
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="URL_PJ" style="font-weight: bold;">Pièces jointes  </label> <p> (Exemple : cahier des charges,chartes graphique etc...) </p>
                    <input type="file" class="form-control-file " id="URL_PJ" aria-describedby="URL_PJ" name="URL_PJ" >
                    
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="Budget_min_projet" style="font-weight: bold;">Budget minimum </label>
                            <input type="number" class="form-control  " id="Budget_min_projet" aria-describedby="Budget_min_projet" name="Budget_min_projet" placeholder="Exemple : 1" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>  
                        </div>
                        
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="budget_max_projet" style="font-weight: bold;">Budget maximum </label>
                            <input type="number" class="form-control  " id="budget_max_projet" aria-describedby="budget_max_projet" name="budget_max_projet"placeholder="Exemple : 200" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>  
                        </div>
                    </div>
                </div>
                <!-- <div class="form-group">
                    <label for="nb_realisateurs" style="font-weight: bold;">Nombre de réalisateurs</label><br>
                    <input type="number" class="  " id="nb_realisateurs" aria-describedby="nb_realisateurs" name="nb_realisateurs" >
                    
                </div> -->
                <div class="g-recaptcha form-group" data-sitekey="6LeTmMAUAAAAADw7uH0DmeFBI9x0YeqhCZos-AFR" ></div>

               <!--  <div class="form-group">
                    <label for="stage">Stage</label><br>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">Option 1
                    </label
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">Option 2
                    </label>
                   
                </div> -->
    
                <!-- <div class="form-group">
                    <label for="titre_projet">Titre du projet</label>
                    <input type="text" class="form-control" id="titre_projet" aria-describedby="titre_projet" name="titre_projet" >
                </div>
    
                <div class="form-group">
                    <label for="titre_projet">Titre du projet</label>
                    <input type="text" class="form-control" id="titre_projet" aria-describedby="titre_projet" name="titre_projet" >
                </div>  -->
    
                    
                <button type="submit" class="btn btn-primary">Soumettre mon annonce</button>
            </form>
            </div>
        </div>
        
        
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </body>
</html>