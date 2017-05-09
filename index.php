<?php
function getCurrentUri()
{
    $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
    $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
    if (strstr($uri, '?')) {
        $uri = substr($uri, 0, strpos($uri, '?'));
    }
    $uri = '/' . trim($uri, '/');
    return $uri;
}

$base_url = getCurrentUri();
$path = [];
$routes = explode('/', $base_url);
foreach ($routes as $route) {
    if (trim($route) != '') {
        array_push($path, $route);
    }
}

if (!empty($path)) {
    $controller = $path[0];
    $action = $path[1];
} else {
    $controller = 'sms';
    $action = 'relatorio_sms';
}
require_once('views/form-relatorio.php');
?>