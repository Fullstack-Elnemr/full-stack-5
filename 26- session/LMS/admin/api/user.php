<?php
require_once '../config/config.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    if(is_array(User::find($id))) {
        $data = [
            'code' => 200, // done
            'data' =>User::find($id)
        ];
    } else {
        $data = [
            'code' => 201, // done
            'message' => "Invalid ID"
        ];
    }
    echo json_encode($data);
}