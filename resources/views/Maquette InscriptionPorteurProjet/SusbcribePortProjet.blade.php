@extends('layout')
@section('title')
    <title>Inscription De Porteur de Projet</title>
@endsection
@section('link')
     <link rel="stylesheet" href="./css/style_PortProjet.css" />
@endsection
@section('body')
  <div class="d-flex justify-content-center align-items-center divCon mt-5">
    <form class="border border-light p-5 divConnect needs-validation" action="#" novalidate>
      <img class="img-fluid rounded-circle mx-auto d-block" src="./img/fav_png150vct.png" alt="Logo" />
      <p class="h4 mb-4 text-center">S'inscrire en tant que Porteur de Projet</p>
      <div class="row">
        <div class="form-group col">
          <label for="nom">Nom<span id="important">*</span></label>
          <input type="text" class="form-control" name="nom" id="nom" placeholder="ex : Hoareau" required />
          <div class="invalid-feedback">
            Entrez un nom
          </div>
        </div>
        <div class="form-group col">
          <label class="text-left" for="prenom">Prénom<span id="important">*</span></label>
          <input type="text" name="prenom" class="form-control" id="prenom" placeholder="ex : Boris" required />
          <div class="invalid-feedback">
            Entrez un prénom
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="Organisation">Organisation<span id="important">*</span></label>
        <div class="form-inline" id="Organisation">
          <select name="typeOrganisation" class="custom-select col-3" id="typeOrganisation">
            <option value="organisation" selected>Type</option>
            <option value="particulier">Particulier</option>
            <option value="entreprise">Entreprise</option>
            <option value="association">Association</option>
          </select>
          &nbsp;&nbsp;&nbsp;
          <!-- <select class="custom-select col" id="nomorganisation" disabled>
                      <option selected>Choisissez le nom de votre Organisation</option>
                  </select> -->
          <input type="text" class="form-control col" id="nomorganisation" placeholder="ex : Connectanou" disabled />
        </div>
      </div>
      <div class="form-group" id="post">
        <label for="postEntreprise">Poste<span class="importSelect" id="important">*</span></label>
        <input type="text" class="form-control" name="postEntreprise" id="posteEntreprise" placeholder="ex : Gérant" required />
        <div class="invalid-feedback">
          Entrez le nom de votre entreprise.
        </div>
      </div>
      <div class="form-group">
        <label for="tel">Numéro de Téléphone</label>
        <input type="tel" name="tel" id="telephone" class="form-control" placeholder="ex : 0692 xx xx xx" />
        <div class="invalid-feedback">
          Entrez un numéro de téléphone.
        </div>
      </div>
      <!-- Email -->
      <div class="form-group">
        <label for="mail">Adresse E-Mail<span id="important">*</span></label>
        <input type="email" id="mail" name="mail" class="form-control" placeholder="ex : HoareauBoris@gmail.com" required />
        <div class="invalid-feedback">
          Entrez une adresse mail valide.
        </div>
      </div>

      <div class="form-group">
        <label for="pseudo">Pseudo<span id="important">*</span></label>
        <input type="text" name="pseudo" id="login" class="form-control" placeholder="ex : ConnectanouGérant974" required />
        <div class="invalid-feedback">
          Entrez un login.
        </div>
      </div>
      <!-- Password -->
      <div class="form-group">
        <label for="passe">Mot de Passe<span id="important">*</span></label>
        <input type="password" name="password" id="mdp" class="form-control" placeholder="***************" required />
        <div class="invalid-feedback">
          Entrez un mot de passe.
        </div>
      </div>
      <div class="form-group">
        <label for="password2">Confirmez votre Mot de Passe<span id="important">*</span></label>
        <input type="password" name="password2" id="mdp2" class="form-control" placeholder="***************" required />
        <div class="invalid-feedback">
          Entrez un mot de passe valide
        </div>
      </div>
      <div class="custom-control custom-checkbox form-group">
        <input type="checkbox" class="custom-control-input" id="customCheck1" required />
        <label class="custom-control-label" for="customCheck1">En cochant cette case, j'accepte que mes informations saisies soient utilisées<br /> uniquement dans le cadre <a href="#" class="lien">légale</a> dans
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
        S'inscrire
      </button>
    </form>
  </div>
  <footer class="py-3 bg-dark align-items-center mt-5">
    <div class="container text-center">
      <div class="icone">
        <a href="https://www.linkedin.com/company/connectanou/"><img src="img/027-linkedin.png" width="23px" height="23px" /></a>

        <a href="https://www.facebook.com/connectanou/"><img src="img/036-facebook.png" width="23px" height="23px" /></a>
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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="js/script_PortProjet.js"></script>
@endsection