<?php
define("DS",DIRECTORY_SEPARATOR);
define('ROOT',dirname(__DIR__).DS);
define("APP",ROOT.'app'.DS);
define("CONFIG",APP.'config'.DS);
define("CONTROLLERS",APP.'controller'.DS);
define("CORE",APP.'core'.DS);
define("MODELS",APP.'models'.DS);
define("VIEWS",APP.'views'.DS);



//config

define("SERVER","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","mvcdb");
define("DATABASE_TYPE","mysql");
define("DOMAIN_NAME","http://news.test");

define("CSS_PATH",DOMAIN_NAME.'/');
define("PATH",DOMAIN_NAME.'/');


require_once('../vendor/autoload.php');

$app=new MVC\core\app();

