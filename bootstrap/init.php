<?php
include "constants.php";
include BASE_PATH . "bootstrap/config.php";
include BASE_PATH . "libs/helpers.php";

try {
    $pdo = new PDO("mysql:dbname=$database_config->db;host={$database_config->host}", $database_config->user, $database_config->pass);
    $pdo->exec("set names utf8;");
} catch (PDOException $e) {
    diePage('Connection failed: ' . $e->getMessage());
}

// echo "Connection to Database is OK!";


include BASE_PATH . "libs/lib-locations.php";

