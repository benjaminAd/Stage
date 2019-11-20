@extends('layout')
@section('title')
    <title>Inscription d'une Organisation</title>
@endsection
@section('link')
    <link rel="stylesheet" href="./css/style_SubOrg.css"/>
@endsection
@section('body')
    <!-- Default form login -->
    <div class="d-flex justify-content-center align-items-center divCon mt-5">
        <form class="border border-light p-5 divConnect needs-validation" action="#" novalidate>
            <img class="img-fluid rounded-circle mx-auto d-block" src="./img/fav_png150vct.png" alt="Logo"/>
            <p class="h4 mb-4 text-center">Inscrire son Organisation</p>
            <div class="form-group">
                <label>SIRET :</label>
                <input type="number" class="form-control" id="siret" placeholder="ex : 362 521 879 00034"/>
                <div class="invalid-feedback">
                    Entrez le SIRET de votre Organisation.
                </div>
            </div>
            <div class="form-group">
                <label>Label de l'Organisation</label>
                <div class="form-inline form-group" id="Organisation">
                    <select name="typeOrganisation" class="custom-select col-3" id="typeOrganisation">
                        <option value="organisation" selected>Type</option>
                        <option value="entreprise">Entreprise</option>
                        <option value="association">Association</option>
                    </select>
                    &nbsp;&nbsp;&nbsp;
                    <input type="text" class="form-control col" id="label" placeholder="ex : Connectanou"
                           required/>
                    <div class="invalid-feedback">
                        Entrez le label de votre entreprise.
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Raison social</label>
                <input type="text" id="social" class="form-control" placeholder="ex : ...." required/>
                <div class="invalid-feedback">
                    Entrez une raison social.
                </div>
            </div>
            <div class="form-group">
                <label>Téléphone</label>
                <input type="tel" id="telephone" class="form-control" placeholder="ex : 0262 xx xx xx" required/>
                <div class="invalid-feedback">
                    Entrez un numéro de téléphone.
                </div>
            </div>
            <div class="form-group">
                <label>Lien vers le site Internet de l'Organisation<span id="important">*</span></label>
                <input type="url" id="site" class="form-control" placeholder="ex : connectanou.re" required/>
                <div class="invalid-feedback">
                    Entrez une URL.
                </div>
            </div>
            <div class="form-group">
                <label>Adresse de l'Organisation</label>
                <input type="text" id="adresse" class="form-control" placeholder="ex : 70 Avenue Georges Brassens"
                       required/>
                <div class="invalid-feedback">
                    Entrez une adresse.
                </div>
            </div>
            <div class="form-group">
                <label>Code Postal et Ville</label>
                <div class="form-inline form-group" id="Organisation">
                    <input type="number" class="form-control col" placeholder="ex : 97490" required/>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" class="form-control col" placeholder="ex : Sainte-Clotilde"
                           required/>
                    <div class="invalid-feedback">
                        Entrez le label de votre entreprise.
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Nombre de Salariés</label>
                <input type="number" id="salarié" class="form-control" placeholder="ex : 60" required/>
                <div class="invalid-feedback">
                    Entrez le nombre de salarié.
                </div>
            </div>
            <div class="form-group">
                <label>Activié de l'Organisation</label>
                <textarea class="form-control" id="activite" rows="3" placeholder="Ex : Association qui permet à de jeunes étudiants
en informatique à gérer différents projets comme la création d'un site internet ou la création d'une application mobile pour des Petites et Moyennes Entreprises. "
                          required></textarea>
            </div>
            <div class="form-group files">
                <label>Importez votre Logo<span id="important">*</span></label>
                <input type="file" class="form-control" required>
                <div class="invalid-feedback">
                    Importez votre Logo.
                </div>
            </div>
            <div class="custom-control custom-checkbox form-group">
                <input type="checkbox" class="custom-control-input" id="customCheck1" required/>
                <label class="custom-control-label" for="customCheck1">En cochant cette case, j'accepte que mes
                    informations saisies soient utilisées<br/> uniquement dans le cadre <a href="#"
                                                                                           class="lien">légale</a> dans
                    l'association.
                    <div class="invalid-feedback">
                        Veuillez cocher la case.
                    </div>
            </div>
            <div class="g-recaptcha form-group" data-sitekey="6LeTmMAUAAAAADw7uH0DmeFBI9x0YeqhCZos-AFR"></div>
            <!-- <script src="https://www.google.com/recaptcha/api.js?render=6LdxmMAUAAAAAGaKb_PBUkAazJGtn_kBjNI1zViW"></script>
              <script>
              grecaptcha.ready(function() {
                  grecaptcha.execute('_reCAPTCHA_site_key_', {action: 'homepage'}).then(function(token) {

                  });
              });
        </script> -->
            <!-- Sign in button -->
            <button class="btn btn-info btn-block my-4 " type="submit" id="bouton">
                Inscrire
            </button>
        </form>
    </div>
    <footer class="py-3 bg-dark align-items-center mt-5">
        <div class="container text-center">
            <div class="icone">
                <a href="https://www.linkedin.com/company/connectanou/"><img src="img/027-linkedin.png" width="23px"
                                                                             height="23px"/></a>

                <a href="https://www.facebook.com/connectanou/"><img src="img/036-facebook.png" width="23px"
                                                                     height="23px"/></a>
            </div>
            <div class="mentionLegal">
                <a href="contact.php">Contact</a>
                <a href="mentionLegal.php">Mentions légales</a>
            </div>
        </div>
    </footer>
@endsection
@section('script')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- <script>
     function onSubmit(token) {
       document.getElementById("demo-form").submit();
     }
   </script> -->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            "use strict";
            window.addEventListener(
                "load",
                function () {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName("needs-validation");
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function (form) {
                        form.addEventListener(
                            "submit",
                            function (event) {
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
@endsection