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

$templatePath = "$theme/$page.twig";



$data = [
  'theme' => $theme,
  'project_name' => GetConfig::GetConfigVar("project_name")['content'],
  'current_year' => date('Y'),
];

echo $twig->render($templatePath, $data);
 ?>
