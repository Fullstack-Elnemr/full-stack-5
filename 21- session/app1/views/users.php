<?php
require_once '../config/connection.php';

#step 1
$sql = "SELECT * FROM `users`";

#step 2
$stm = $dbh->prepare($sql);

#step 3
$stm->execute();

#step 4
$data = $stm->fetchAll(PDO::FETCH_ASSOC);
//print_r($data);
//die;
//for($i=0; $i<count($data); $i++) {
//    $row = $data[$i];
//    echo "Username: " . $row['username'] . "<br>";
//}

//foreach($data as $row) {
//    echo "Username: " . $row['username'] . "<br>";
//}

?>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>username</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach($data as $user):
    ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['username']; ?></td>
            <td><a href="">Delete</a></td>
        </tr>
    <?php
    endforeach;
    ?>

    </tbody>
</table>
