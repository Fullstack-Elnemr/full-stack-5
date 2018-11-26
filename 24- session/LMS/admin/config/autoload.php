<?php
foreach($libs as $lib) {
    $path = ADMIN_LIBS_DIR . $lib . '.lib.php'; //user.lib.php
    if(file_exists($path)) {
        require_once $path;
    } else {
        if(ENV == 'div') {
            echo 'Error require file ' . $path;
        }
        die;
    }
}

foreach($models as $model) {
    $path = ADMIN_MODELS_DIR . $model . '.class.php'; //user.lib.php
    if(file_exists($path)) {
        require_once $path;
    } else {
        if(ENV == 'div') {
            echo 'Error require file ' . $path;
        }
        die;
    }
}