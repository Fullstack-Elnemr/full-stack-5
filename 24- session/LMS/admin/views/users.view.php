<?php
require_once '../config/config.php';

//$validation = new Validation();
//echo $validation->email('admin@admin.com');
////echo $validation->password('A1234a12@');
////echo $validation->security('ahmed \n');
//
//echo Validation::email('admin@admin.com');
////echo PDO::FETCH_ASSOC;
///
///
//$user = new User;
//$user->deleteAll();

//$user = new User;
//
//if(ENV == 'test') {
//    for($i=2; $i<100; $i++) {
//        $user->setName('User ' . $i);
//        $user->setUsername('user' . $i);
//        $user->setPassword('User1234' . $i);
//
//        $user->insert();
//    }
//}

//User::deleteAll();
//User::delete(222);
var_dump(User::findBy('name', 'User 2'));
