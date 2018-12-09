<?php
if(isset($_SESSION['user'])) {
    unset($_SESSION['user']);
}

exit(header("Location: " . ADMIN_URL . "?page=index"));
