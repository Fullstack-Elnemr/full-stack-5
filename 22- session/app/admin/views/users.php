<?php
require_once '../config/constants.php';
require_once ADMIN_CONFIG_PATH . 'config.php';

if(isset($_GET['action'], $_GET['id'])) {
    $id = $_GET['id'];

    if($_GET['action'] == 'del') {
        deleteUserById($id);
    } elseif($_GET['action'] == 'edit') {
        $currentUser = getUserById($id);
        $edit = true;
    }
}

if(isset($_POST['insert_user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($id = insertUser($username, $password)) {
        $newUser = getUserById($id);
        echo 'Inserted User ' . $newUser['username'];
    } else {
        echo 'Error insert user';
    }
}


if(isset($_POST['edit_user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    if(!empty($id)) {
        if($id = updateUserById($id ,$username, $password)) {
            echo 'Updated User ';
        } else {
            echo 'Error Updated user';
        }
    }
}

$allUsers = getAllUsers();
?>
<a href="http://localhost/phpmyadmin//themes/pmahomme/img/logo_right.png" target="_blank">test</a>
<form method="post">
    <input type="hidden"
           name="id"
           value="<?php
                    if(isset($edit)) {
                        echo $currentUser['id'];
                    }
                    ?>">
    Username <input type="text"
                    name="username"
                    value="<?php
                            if(isset($edit)) {
                                echo $currentUser['username'];
                            }
                            ?>"><br>
    Password <input type="password" name="password"><br>
    <input type="submit"
           name="<?php
                    if(isset($edit)){
                        echo 'edit_user';
                    } else {
                        echo 'insert_user';
                    }
                ?>" value="Add New">
</form>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Username</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach($allUsers as $user):
    ?>
    <tr>
        <td><?php echo $user['id']; ?></td>
        <td><?php echo $user['username']; ?></td>
        <td><a href="?action=edit&id=<?php echo $user['id']; ?>">Edit</a></td>
        <td><a href="?action=del&id=<?php echo $user['id']; ?>">Delete</a></td>
    </tr>
    <?php
    endforeach;
    ?>
    </tbody>
</table>
