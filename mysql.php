<?php

ini_set("display_errors", "0");

// DB options
define("DB_NAME", "database");
define("DB_USER", "root");
define("DB_PASSWORD", "admin");
define("DB_HOST", "localhost");
define("DB_PREFIX", "maestro_");
define("DB_CHARSET", "utf8");

// Connect to database
$db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_USER, DB_PASSWORD);

?>
