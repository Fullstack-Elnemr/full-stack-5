<?php
include 'templates/header.php';

$username = 'admin@gmail.com';
$password = 'admin';
$errors = array();

if (isset($_GET['email'], $_GET['password'])) {
    $userEmail = $_GET['email'];
    $userPassword = $_GET['password'];


    if(empty($userEmail)) {
        $errors[] = 'Please Enter User Email';
    }
    if(empty($userPassword)) {
        $errors[] = 'Please Enter User Password';
    }

    if(empty($errors)) {
        if($username === $userEmail && $password === $userPassword) {
            echo 'Index';
        } else {
            $errors[] = 'Invalid Email or Password';
        }
    }

}


?>

<div class="container">
    <div class="col-md-6 col-md-offset-3">

        <div class="errors">
            <?php
            if(!empty($errors)) {
                for($i = 0; $i < count($errors); $i++){
                    ?>
                    <p class="bg-danger">
                        <?php
                        echo $errors[$i];
                        ?>
                    </p>
                    <?php
                }
            }
            ?>
        </div>
        <form method="get">
            <div class="form-group">
                <label for="">Email</label>
                <input type="email"
                       class="form-control"
                       placeholder="email"
                       autocomplete="off"
                       value="<?php if(isset($_GET['email'])) echo $_GET['email']; ?>"
                       name="email">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password"
                       class="form-control"
                       placeholder="00000"
                       autocomplete="off"
                       name="password">
            </div>
            <input type="submit" class="btn btn-success" name="login">
        </form>
    </div>
</div>

<?php include 'templates/footer.php'; ?>
