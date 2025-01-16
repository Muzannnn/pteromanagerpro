$(document).ready(function() {
    $('#form-register').on('submit', function(event) {
        event.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            url: 'http://anistream-v4.fr/server/api/js/register.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log('Succès:', response);
                
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Erreur:', textStatus, errorThrown);
            }
        });
    });
});