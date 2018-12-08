<?php

error_reporting(E_ALL);
require __DIR__ . '/dist/vendor/autoload.php';
use Doctrine\ORM\Tools\Console\ConsoleRunner;
define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'development');
define('BASEPATH', __DIR__ . '/dist/vendor/codeigniter/framework/system/');
define('APPPATH', __DIR__ . '/dist/application/');
require APPPATH . 'libraries/Doctrine.php';
$doctrine = new Doctrine();
return ConsoleRunner::createHelperSet($doctrine->get_entity_manager());
