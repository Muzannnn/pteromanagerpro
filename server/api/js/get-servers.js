function formatTimestamp(timestamp) {
    var date = new Date(timestamp * 1000); // Convertir le timestamp Unix en millisecondes
    var options = { year: 'numeric', month: '2-digit', day: '2-digit' };
  
    return date.toLocaleDateString('fr-FR', options);
}

function getServers(){
    $.ajax({
        url: `./api/ajax/get-servers.php`,
        type: 'get',
        dataType: 'JSON',
        success: function(response){
            var resp = response.reverse();
            var len = response.length;
            if(len == 0){
                var tr_str =
            "<div class='card mx-auto col-auto'>" +
              "<div class='card-body text-center p-4'>" +
                "<h4>Vous n'avez aucun serveur dans votre liste.</h4>" +
                "<span>ne serait-il pas le moment parfait de commencer ?</span>" +
              "</div>" +
            "</div>";
            $("#myservers").append(tr_str);
            }
            for(var i=0; i<len; i++){
                var name = resp[i].name;
                var description = resp[i].description;
                var date = resp[i].creation_date; 
                var id = resp[i].id; 
                var ip = resp[i].ip_adress; 

                var tr_str = 
                "<div class='col-lg-4 col-md-6'>" +
                  "<div class='card'>" +
                    "<div class='card-body p-3'>" +
                      "<div class='d-flex justify-content-between'>" +
                        "<span class='badge bg-primary fs-5'><i class='fas fa-users'></i>&nbsp;25 <b>/450</b></span>" +
                        "<span class='badge bg-success fs-5' data-bs-toggle='tooltip' data-bs-placement='top' title='En ligne'><i class='fas fa-check'></i></span>" +
                      "</div>" +
                      "<h4 class='mt-3 mb-0'>" + name + "</h4>" +
                      "<h6>" + description + "</h6>" +
                    "</div>" +
                    "<div class='card-footer p-0 border-0 bg-transparent '>" +
                      "<div class='btn-toolbar row' role='toolbar' aria-label='Toolbar with button groups'>" +
                        "<div class='btn-group mr-2' role='group' aria-label='First group'>" +
                          "<a href='fivem://connect/cfx.re/join/" + ip + "' class='btn btn-secondary'><i class='fas fa-plug'></i>&nbsp;Connexion</a>" +
                          "<a href='console.php?id=" + id + "' class='btn btn-primary'><i class='fas fa-terminal'></i>&nbsp;Controller</a>" +
                        "</div>" +
                      "</div>" +
                    "</div>" +
                  "</div>" +
                "</div>";

                $("#myservers").append(tr_str);
            }

        },
        error: function() {
            var tr_str =
            "<div class='card mx-auto col-auto'>" +
              "<div class='card-body text-center p-4'>" +
                "<h4>Vous n'avez aucun serveur dans votre liste.</h4>" +
                "<span>ne serait-il pas le moment parfait de commencer ?</span>" +
              "</div>" +
            "</div>";
            $("#myservers").append(tr_str);
        }
    });
};