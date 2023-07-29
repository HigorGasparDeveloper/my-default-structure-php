<?php 
    require ("vendor/autoload.php");
    require ("functions/functions.php");
    use app\core\RouterCore;
    $uri = $_GET['url'] ?? "login";
    $app = new RouterCore($uri,$_SERVER['REQUEST_METHOD']);
    require("Router.php");
    $app->run();