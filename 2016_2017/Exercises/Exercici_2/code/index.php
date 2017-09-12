<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__ . '/vendor/autoload.php';

use Aura\Router\RouterContainer;
use ProjectesWeb\lib\Database\Database;
use Zend\Diactoros\ServerRequestFactory;
use ProjectesWeb\View\ViewHelper;
use ProjectesWeb\Model\Repository\PdoTasksRepository;
use ProjectesWeb\Controller\TaskController;

$request = ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);
$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();

// add a route to the map, and a handler for it
$map->get('task.getAll', '/', function ($request) {
    $db = Database::getInstance("todolist", "homestead", "secret");
    $viewHelper = new ViewHelper();
    $repository = new PdoTasksRepository($db);
    $taskController = new TaskController($request, $repository, $viewHelper);
    return $taskController->indexAction();
});

// get the route matcher from the container ...
$matcher = $routerContainer->getMatcher();
// .. and try to match the request to a route.
$route = $matcher->match($request);
if (!$route) {
    echo "No route found for the request.";
    exit;
}

// add route attributes to the request
foreach ($route->attributes as $key => $val) {
    $request = $request->withAttribute($key, $val);
}

$callable = $route->handler;
$response = $callable($request);
echo $response->getBody();