<?php
session_start();

use App\Core\Request;

define('BASE_PATH', __DIR__ . '/../');

require_once(BASE_PATH . '/vendor/autoload.php');
require_once(BASE_PATH . '/helpers/helpers.php');
require_once(BASE_PATH . '/routes/web.php');
$config = include BASE_PATH . '/config/configs.php';


$dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotenv->load();


// Set the default timezone from configuration
date_default_timezone_set($config['timezone']);


$request = new Request();
