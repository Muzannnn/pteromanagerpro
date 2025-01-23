<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    if (empty(htmlspecialchars($_GET['token']))) {
        header("HTTP/1.1 403");
        exit;
    }
    
}
?>