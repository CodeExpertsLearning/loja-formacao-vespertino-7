<?php
date_default_timezone_set('America/Sao_Paulo');
//bootstrap.php
$autoloader = require __DIR__ . '/vendor/autoload.php';
Doctrine\Common\Annotations\AnnotationRegistry::registerLoader([$autoloader, 'loadClass']);

//App Config
define('HOME', '');
define('APP_DEBUG', true);
define('TEMPLATES', __DIR__ . '/templates');

//Database Configs
define('DB_HOST',  '');
define('DB_NAME',  '');
define('DB_USER',  '');
define('DB_PASSWORD',  '');

//PagSeguro
define('PAGSEGURO_EMAIL', '');
define('PAGSEGURO_TOKEN', '');
define('PAGSEGURO_SANDBOX', true);

ini_set('display_errors', APP_DEBUG);
error_reporting(E_ALL | E_NOTICE | E_ERROR | E_WARNING | E_PARSE);
