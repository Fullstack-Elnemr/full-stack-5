<?php
//global
define('APP_NAME', 'LMS v2');
define('ENV', 'dev'); // dev , test, prod

//db connection
define('DB_NAME', 'lms');
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DRIVER', 'mysql');
define('DB_DSN', DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME);

//dirs
define('DS', DIRECTORY_SEPARATOR); // / or \
define('HOST_NAME', dirname(dirname(__DIR__)) . DS);
define('ADMIN_DIR', HOST_NAME . 'admin' . DS);
define('ADMIN_LIBS_DIR', ADMIN_DIR . 'libs' . DS);
define('ADMIN_CONFIG_DIR', ADMIN_DIR . 'config' . DS);
define('ADMIN_PUBLIC_DIR', ADMIN_DIR . 'public' . DS);
define('ADMIN_MODELS_DIR', ADMIN_DIR . 'models' . DS);
define('ADMIN_VIEWS_DIR', ADMIN_DIR . 'views' . DS);
define('ADMIN_TEMP_DIR', ADMIN_DIR . 'templates' . DS);

//http://localhost/LMS/admin/views/students.php
define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/LMS/');
define('ADMIN_URL', BASE_URL . 'admin/');
define('ADMIN_PUBLIC_URL', ADMIN_URL . 'public/');
define('ADMIN_VIEWS_URL', ADMIN_URL . 'views/');
define('ADMIN_API_URL', ADMIN_URL . 'api/');

