<?php

function getAllUsers() {
    global $dbh;
    $sql = "SELECT * FROM users";
    $stm = $dbh->prepare($sql);
    if($stm->execute()) {
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    } else {
        if($env == 'dev') {
            return 'Error execute';
        }
        return false;
    }
}


function getUserById($id) {
    global $dbh;
    $sql = "SELECT * FROM users WHERE id=:id";
    $data = [':id'=> $id];
    $stm = $dbh->prepare($sql);
    if($stm->execute($data)) {
        return $stm->fetch(PDO::FETCH_ASSOC);
    } else {
        if($env == 'dev') {
            return 'Error execute';
        }
        return false;
    }
}


function deleteUserById($id) {
    global $dbh;
    $sql = "DELETE FROM users WHERE id=:id";
    $data = [':id'=> $id];
    $stm = $dbh->prepare($sql);
    if($stm->execute($data)) {
        return true;
    } else {
        if($env == 'dev') {
            return 'Error execute';
        }
        return false;
    }
}


function insertUser($username, $password) {
    global $dbh;
    $sql = "INSERT INTO 
            users(username, password)
            VALUES (:username, :password)";

    $data = [
        ':username' => $username,
        ':password' => $password
    ];
    $stm = $dbh->prepare($sql);
    if($stm->execute($data)) {
        return $dbh->lastInsertId();
    } else {
        if($env == 'dev') {
            return 'Error execute';
        }
        return false;
    }
}


function updateUserById($id, $username, $password) {
    global $dbh;
    $sql = "UPDATE users SET 
            username=:username,
            password=:password
            WHERE id=:id";

    $data = [
        ':username' => $username,
        ':password' => $password,
        ':id' => $id
    ];
    $stm = $dbh->prepare($sql);
    if($stm->execute($data)) {
        return true;
    } else {
        if($env == 'dev') {
            return 'Error execute';
        }
        return false;
    }
}