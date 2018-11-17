<?php
require_once 'constants.php';
require_once ADMIN_CONFIG_PATH . 'connection.php';

//libs
//require_once '../libs/user.lib.php';

$libs = [
    'user',
    'product',
];

foreach($libs as $lib) {
    $path = ADMIN_LIBS_PATH . $lib .'.lib.php';
    if (file_exists($path))
        require_once ADMIN_LIBS_PATH . $lib .'.lib.php';
    else {
        if($env == 'dev') {
            echo 'Not Found ' . $lib;
        }
        die;
    }
}


