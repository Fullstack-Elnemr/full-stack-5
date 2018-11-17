<?php
//env
$env = 'dev'; // prod

//database connection
$dbname = 'app1';
$host = 'localhost';
$driver = 'mysql';
$username = 'root';
$password = '';
$dsn = "$driver:host=$host;dbname=$dbname";

define('DS', DIRECTORY_SEPARATOR);
define('APP_PATH', dirname(dirname(__DIR__)) . DS);
define('ADMIN_PATH', APP_PATH . 'admin' . DS);
define('ADMIN_LIBS_PATH', ADMIN_PATH . 'libs' . DS);
define('ADMIN_VIEWS_PATH', ADMIN_PATH . 'views' . DS);
define('ADMIN_PUBLIC_PATH', ADMIN_PATH . 'public' . DS);
define('ADMIN_CONFIG_PATH', ADMIN_PATH . 'config' . DS);
