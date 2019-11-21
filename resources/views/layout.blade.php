<!DOCTYPE html>
<html lang="fr" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    <link rel="shortcut icon" href="./favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/paper-kit.css" rel="stylesheet"/>
    <link href="css/style_ourTeam.css" rel="stylesheet"/>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    @yield('link')
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="50">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="profil.html" rel="tooltip" data-placement="bottom" style="color:#E0363E;">
                <img class="img-circle " src="img/faces/joe-gardner-2.jpg" id="favicon">
                Username
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="https://demos.creative-tim.com/paper-kit-2/docs/1.0/getting-started/introduction.html"
                       class="nav-link" style="color:#1E4F87;">L'association</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Retourner à la page d'acceuil" data-placement="bottom"
                       href="section_equipe.html " style="color:#1E4F87;">
                        Equipe
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Like us on Facebook" data-placement="bottom"
                       href="https://www.facebook.com/CreativeTim" style="color:#1E4F87;">
                        Realisateur
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Follow us on Instagram" data-placement="bottom"
                       href="https://www.instagram.com/CreativeTimOfficial" style="color:#1E4F87;">
                        Projets
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Contactez-nous" data-placement="bottom" href="Contact"
                       style="color:#1E4F87;">
                        Contact
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Se Connecter" data-placement="bottom" href="{{url('login')}}"
                       style="color:#1E4F87;">
                        Connexion
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br><br><br><br>
@yield('body')
<script src="js/core/jquery.min.js" type="text/javascript"></script>
<script src="js/core/popper.min.js" type="text/javascript"></script>
<script src="js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="js/plugins/nouislider.min.js" type="text/javascript"></script>
<!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
<script src="js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
@yield('script')
</body>
</html>