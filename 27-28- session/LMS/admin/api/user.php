<?php
require_once '../config/config.php';

$action = isset($_GET['action']) ? $_GET['action'] : null;

switch($action) {
    case 'getUserById':
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
    break;

    case 'deleteUserById':
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            if(User::delete($id)) {
                $data = [
                    'code' => 200, // done
                    'message' => 'success : selected user has been deleted'
                ];
            } else {
                $data = [
                    'code' => 201, // error
                    'message' => 'error: selected user not found'
                ];
            }

            echo json_encode($data);

        }
    break;

    case 'getUsers':
        foreach(User::all() as $user):
            ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><a
                        class="btn btn-warning edit"
                        data-toggle="modal"
                        data-target="#add-new-user"
                        user-id="<?php echo $user['id']; ?>">Edit</a></td>
                <td><a class="btn btn-danger delete" user-id="<?php echo $user['id']; ?>">Delete</a></td>
            </tr>
            <?php
        endforeach;
    break;

}
