<?php
require_once 'config/config.php';

require_once ADMIN_TEMP_DIR . 'header.tpl';
$targetPage = isset($_GET['page']) ? $_GET['page'] : 'index';
$page = ADMIN_VIEWS_DIR . 'auth/' . $targetPage . '.php';

if(isset($_SESSION['user'])) {
    if(file_exists($page)) {
        require_once $page;
    } else {
        require_once ADMIN_VIEWS_DIR . 'errors/404.php';
    }
} else {
    require_once ADMIN_VIEWS_DIR . 'login.php' ;
}


require_once ADMIN_TEMP_DIR . 'footer.tpl';
