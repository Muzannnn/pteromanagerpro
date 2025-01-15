<?php 
require 'vendor/autoload.php';

include ("server/api/class/include.php");

$loader = new \Twig\Loader\FilesystemLoader('themes');

$twig = new \Twig\Environment($loader, [
  'cache' => false,
  'debug' => true
]);

$twig->addExtension(new \Twig\Extension\DebugExtension());

$requestUri = $_SERVER['REQUEST_URI']; 

$requestUri = explode('?', $requestUri)[0];

if ($requestUri === '/' || $requestUri === '') {
    header('Location: /home');
    exit;
}

$page = trim($requestUri, '/'); 

$theme = GetConfig::GetConfigVar("theme")['content'];

$templatePath = "$theme/views/$page.twig";

if (!file_exists("themes/$templatePath")) {
  http_response_code(404);
  echo $twig->render('partials/404.twig');
  exit;
}

$data = [
  'theme' => $theme,
  'project_name' => GetConfig::GetConfigVar("project_name")['content'],
  'description' => GetConfig::GetConfigVar("description")['content'],
  'favicon' => GetConfig::GetConfigVar("favicon")['content'],
  'icon' => GetConfig::GetConfigVar("icon")['content'],
];

echo $twig->render($templatePath, $data);
 ?>
