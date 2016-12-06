<?php
header("Content-Type:text/html;charset=utf-8");
ini_set('display_errors', 1);
session_start();

require_once 'config.php';

set_include_path(get_include_path()
				.PATH_SEPARATOR.APPLICATION
				.PATH_SEPARATOR.CONTROLLER
				.PATH_SEPARATOR.MODEL
				.PATH_SEPARATOR.TEMPLATE
				.PATH_SEPARATOR.LIBRARY
				.PATH_SEPARATOR.CORE);

function loader($class){
    include_once (strtolower($class).".php");
}

spl_autoload_register('loader');

$route = Route::getInstance();

$obj = $route->init();

require_once APPLICATION.'bootstrap.php';

?>