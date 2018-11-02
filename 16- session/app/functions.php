<?php
function sum($n1, $n2, $operation) {
    $result['status'] = true;

    if($operation == '+') {
        $result['value'] = $n1 + $n2;
    } elseif($operation == '-') {
        $result['value'] = $n1 - $n2;
    } elseif($operation == '*') {
        $result['value'] = $n1 * $n2;
    } elseif($operation == '%') {
        if($n2 == 0){
            $result['status'] = false;
            $result['mes'] = "can't division by Zero";
            return $result;
        }else{
            $result['value'] = $n1 / $n2;
        }
    } else {
        $result['status'] = false;
        $result['mes'] = 'your operations (+, -, *, %)';
        return $result;
    }

    return $result;
}
//$result = sum(5,2,'+');
//if($result['status']) {
//    echo 'Your Result : ' . $result['value'];
//} else {
//    echo 'You Have Error : ' . $result['mes'];
//}
