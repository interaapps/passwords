<?php if (file_exists("." . $_SERVER['REQUEST_URI'])) return false; ?><?php
chdir('..');

// IMPORTING STANDARD LIBS
require "ulole/loader.php";

loadCore();

// Initializing routings
$router = new Router();
require "app/route.php";
$router->setDirectories($views_dir, $templates_dir);

$router->route();