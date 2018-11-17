<?php
$dbname = "app1";
$host = "localhost";
$username = "root";
$password = "";
$driver = "mysql";

$dsn = "$driver:host=$host;dbname=$dbname";

try {
    $dbh = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo $e->getMessage();
    die;
}



/**
 * Select All
 */
#step 1
//$sql = "SELECT * FROM `users`";
//
//#step 2
//$stm = $dbh->prepare($sql);
//
//#step 3
//$stm->execute();
//
//#step 4
////$data = [];
////while ($row = $stm->fetch(PDO::FETCH_ASSOC)) {
////    $data[] = $row;
////}
//
//$data = $stm->fetchAll(PDO::FETCH_ASSOC);
//print_r($data);

/**
 * End select all
 */

/**
 * Insert into users
 */
//$u_name = "admin";
//$u_pass = md5("12345");
//
//$sql = "INSERT INTO
//        `users`(`username`, `password`)
//         VALUES (:username, :password)";
//
//$user = [
//    ":username" => $u_name,
//    ":password" => $u_pass
//];
//
//$stm = $dbh->prepare($sql);
//
//$stm->execute($user);
