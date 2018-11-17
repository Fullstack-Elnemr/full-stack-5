<?php
// config/connection
try{
    $dbh = new PDO($dsn, $username, $password);
}catch (PDOException $exception) {
    if($env == 'dev') {
        echo $exception->getMessage();
    }
    die;
}
