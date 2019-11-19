$(function () {
    $('select[name="typeOrganisation"]').change(function () {
        // lorsqu'on change de valeur dans la liste
        var valeur = $(this).val(); // valeur sélectionnée
        if (valeur == 'particulier') {
            console.log('je suis un ' + valeur);
            $('#nomorganisation').remove();
            $('#postparticulier').remove();
            $('#nomentreprise').remove();
            $('#nomassociation').remove();
            $('.importSelect').show();
            $('#posteEntreprise').prop('required', true);
            var input = $(
                ' <input type="text" class="form-control col" id="nomorganisation" placeholder="ex : Connectanou" disabled/>'
            );
            $('#Organisation').append(input);
        } else if (valeur == 'entreprise') {
            console.log('je suis une ' + valeur);
            $('#nomorganisation').remove();
            $('#postparticulier').remove();
            $('#nomentreprise').remove();
            $('#nomassociation').remove();
            $('.importSelect').hide();
            $('#posteEntreprise').prop('required', false);
            var select = $(
                '<select name="Nom" class="custom-select col" id="nomentreprise"><option value="" selected>Choisissez le nom de votre Entreprise</option><option value="3">Apple</option><option value="4">Facebook</option><option value="ajouter">Ajouter</option></select>'
            );
            $('#Organisation').append(select);
        } else if (valeur == 'association') {
            console.log('je suis une ' + valeur);
            $('#nomorganisation').remove();
            $('#postparticulier').remove();
            $('#nomentreprise').remove();
            $('#nomassociation').remove();
            $('.importSelect').hide();
            $('#posteEntreprise').prop('required', false);
            var select = $(
                '<select name="Nom" class="custom-select col" id="nomassociation"><option value="" selected>Choisissez le nom de votre Association</option><option value="0">Connectanou</option><option value="1">Croix Rouge</option><option value="ajouter">Ajouter</option></select>'
            );
            $('#Organisation').append(select);
        } else if (valeur == 'organisation') {
            console.log('je suis une organisation');
            $('#nomorganisation').remove();
            $('#postparticulier').remove();
            $('#nomentreprise').remove();
            $('#nomassociation').remove();
            $('.importSelect').show();
            $('#posteEntreprise').prop('required', true);
            var input = $(
                ' <input type="text" class="form-control col" id="nomorganisation" placeholder="ex : Connectanou" disabled/>'
            );
            $('#Organisation').append(input);
        }
        $("select[name='Nom']").change(function () {
            var val2 = $(this).val();
            if (val2 == 'ajouter') {
                console.log('ajouter');
                window.location = 'SubscribeOrga';
            }
        });
    });
});
(function () {
    'use strict';
    window.addEventListener(
        'load',
        function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener(
                    'submit',
                    function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    },
                    false
                );
            });
        },
        false
    );
})();
