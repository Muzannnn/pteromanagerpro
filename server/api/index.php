<?php

include("./class/include.php");

$headers = apache_request_headers();

if (isset($headers['Authorization'])) {
    $authorization_header = $headers['Authorization'];

    if (preg_match('/^Bearer\s+(.*)$/', $authorization_header, $matches)) {
        $api_key = $matches[1];

        if (Security::CheckTokenAPI($api_key)) {
            if(isset($_GET['add_anime'])){
                $name = $_POST['name'];
                $id_name = $_POST['id_name'];
                $genres = $_POST['genres'];
                $plot = $_POST['plot'];
                $synopsis = $_POST['synopsis'];
                $id_imdb = $_POST['id_imdb'];
                $year = $_POST['year'];
                $vertical_image = $_POST['vertical_image'];
                $horizontal_image = $_POST['horizontal_image'];
                Animes::AddAnime($name, $id_name, $id_imdb, $genres, $plot, $synopsis, $year, $vertical_image, $horizontal_image);
            }

            if(isset($_GET['add_episode'])){
                $anime_id = htmlspecialchars($_POST['anime_id']);
                $season = htmlspecialchars($_POST['season']);
                $name = htmlspecialchars($_POST['name']);
                $desc = htmlspecialchars($_POST['desc']);
                $file = htmlspecialchars($_POST['file']);
                //Animes::AddAnime($name, $desc);
            }

            if(isset($_GET['add_season'])){
                $anime_id = htmlspecialchars($_POST['anime_id']);
                $number = htmlspecialchars($_POST['number']);
                //Animes::AddAnime($name, $desc);
            }
        } else {
            http_response_code(401); 
            echo "Error: Invalid API key";
        }
    } else {
        http_response_code(401); 
        echo "Error: Bearer scheme missing";
    }
} else {
    http_response_code(401); 
    echo "Error: Authorization header missing";
}