<?php
session_start();

use App\Core\Request;
use App\models\User;

define('BASE_PATH', __DIR__ . '/../');

require_once(BASE_PATH . '/vendor/autoload.php');
require_once(BASE_PATH . '/helpers/helpers.php');
require_once(BASE_PATH . '/routes/web.php');


$dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotenv->load();


$request = new Request();
$user = new User();
