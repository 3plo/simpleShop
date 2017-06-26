<?php
/**
 * Created by PhpStorm.
 * User: b.plotka
 * Date: 26.03.2017
 * Time: 16:24
 */
require_once(__DIR__ . '/../vendor/Autoloader.php');
require_once(__DIR__ . '/../library/Smarty/libs/Smarty.class.php');

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';
$mainApplication = new \www\Application($controllerName, $actionName);
$templateEngine = new Smarty();
$templateDir = '../views/templates/';
$mainApplication->run($templateEngine, $templateDir);




