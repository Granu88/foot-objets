<?php
use Controllers\Teams;

//ça charge automatiquement les classes//
spl_autoload_register(function ($class) {
  $parts = explode('\\', $class);
  $className = array_pop($parts);
  $path = implode(DIRECTORY_SEPARATOR, $parts);
  $file = $className.'.php';
  require strtolower($path) . DIRECTORY_SEPARATOR . $file;
});

$data = explode('/', substr($_SERVER['REQUEST_URI'], 1));
array_shift($data);

$route = $data[0] ? $data[0] : 'teams';

if ($route === 'teams') {
  $controller = new Teams;
  if (isset($data[1])) {
    $controller->showTeam($data[1]);
  } else {
    $controller->listTeams();
  }
} else {
  throw new \Exception('Page not foud!');
}
?>
