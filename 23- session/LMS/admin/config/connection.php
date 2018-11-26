<?php
require_once 'constants.php';
try{
    $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
}catch (PDOException $exception) {
    if(ENV == 'div') {
        echo $exception->getMessage();
    }
    die;
}