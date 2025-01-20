<?php 
require 'vendor/autoload.php';

include("server/api/class/include.php");

if(isset($_POST['create_account'])){
  echo "adsa";
}

$loader = new \Twig\Loader\FilesystemLoader('themes');
$twig = new \Twig\Environment($loader, [
  'cache' => false,
  'debug' => true,
]);

$twig->addExtension(new \Twig\Extension\DebugExtension());

$requestUri = $_SERVER['REQUEST_URI'];
$requestUri = explode('?', $requestUri)[0];
$requestUri = trim($requestUri, '/');

if ($requestUri === '' || $requestUri === '/') {
    header('Location: /home');
    exit;
}

$theme = GetConfig::GetConfigVar("theme")['content'];

$phpPagesFile = __DIR__ . '/php_views/routes.json';
$phpPages = [];
if (file_exists($phpPagesFile)) {
    $phpPages = json_decode(file_get_contents($phpPagesFile), true);
}

$userPermissionLevel = 1;


if (array_key_exists($requestUri, $phpPages)) {
  $requiredPermissionLevel = $phpPages[$requestUri]['permission_level'];
  if ($userPermissionLevel >= $requiredPermissionLevel) {
      $phpFile = __DIR__ . "/php_views/$requestUri.php";
      if (file_exists($phpFile)) {
          include $phpFile;
          exit;
      } else {
          http_response_code(404);
          echo "Erreur 404 : Fichier PHP introuvable.";
          exit;
      }
  } else {
      http_response_code(403);
      echo "Erreur 403 : Vous n'avez pas les permissions nécessaires pour accéder à cette page.";
      exit;
  }
}

$templatePath = "$theme/views/$requestUri.twig";

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
  'brand_logo' => GetConfig::GetConfigVar("brand_logo")['content'],
  'slogan' => GetConfig::GetConfigVar("slogan")['content'],
];

echo $twig->render($templatePath, $data);


 ?>
