$(document).ready(function () {
    var password_strong = true;
    $('#password').keyup(function (e) {
        var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
        var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
        var enoughRegex = new RegExp("(?=.{6,}).*", "g");
        if (false == enoughRegex.test($(this).val())) {
            $('#passstrength').html('Plus de caractères');
            password_strong === false;
        } else if (strongRegex.test($(this).val())) {
            $('#passstrength').html('<text class="text-success">Fort!</text>');
            password_strong === true;

        } else if (mediumRegex.test($(this).val())) {
            $('#passstrength').html('<text class="text-warning">Moyen!</text>');
            password_strong === false;
        } else {
            $('#passstrength').html('<text class="text-danger">Faible</text>');
            password_strong === false;
        }
    });
    $('#form-register').on('submit', function (event) {
        event.preventDefault();

        var formData = new FormData(this);
        if (password_strong) {
            $.ajax({
                url: '/server/api/ajax/register.php',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    window.location.href = "/login";
                },
                error: function (jqXHR) {
                    toastr.error(jqXHR.responseJSON?.message, 'Erreur');
                }
            });
        }else{
            toastr.error("Veuilliez mettre un mot de passe plus puissant.", 'Erreur');
        }
    });
});