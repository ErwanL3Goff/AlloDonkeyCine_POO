<?php

require 'config/constant.php';
require 'config/db.php';
require 'config/repositories.php';
require 'config/models.php';
require 'config/controllers.php';
require 'Router.php';
?>
<style>
<?php 
require 'View/css/style.css';?></style>
<?php


//MON ROUTER

$router = new Router();
$elements = $router->getController($_SERVER['REQUEST_URI']);

$controller = $elements['controller'];

//J'initialise une instance de mon controller avec la connexion à la base de données
$cont = new $controller($dbh);

//J'appele l'action de mon controller
$action = $elements['action'];
$id = $elements['id'];
$cont->$action($id);
