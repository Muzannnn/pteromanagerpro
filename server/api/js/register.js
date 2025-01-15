$(document).ready(function() {
    $('#form-register').on('submit', function(event) {
        event.preventDefault(); // Empêche le comportement par défaut de soumission du formulaire

        var formData = new FormData(this);

        $.ajax({
            url: 'http://anistream-v4.fr/server/api/js/register.php', // Remplacez l'URL par celle de votre endpoint
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log('Succès:', response);
                // Traitement des données de réponse
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Erreur:', textStatus, errorThrown);
            }
        });
    });
});