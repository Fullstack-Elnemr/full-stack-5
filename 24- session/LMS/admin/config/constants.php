<?php
//global
define('APP_NAME', 'LMS v1');
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
