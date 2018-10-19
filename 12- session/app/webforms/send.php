<?php
//echo 'Welcome Mr.' . $_GET['username'];
//$result = 5 > 2;

/*$degree = 70;

if($degree == 100) {
    echo 'A+';
}else if ($degree >= 85 ) {
    echo 'A';
}else if ($degree >= 75 ) {
    echo 'B';
}else if ($degree >= 65 ) {
    echo 'C';
}else {
    echo 'F';
}
*/

//if(isset($_GET['username'], $_GET['password'], $_GET['email'], $_GET['comment'])) {
//    print_r($_GET);
//}

if(!isset($_GET['username'])) {
    echo 'Please Enter Username';

} elseif(empty($_GET['username'])) {
    echo 'username empty';

} else {
    $username = $_GET['username'];
    echo $username;
}

