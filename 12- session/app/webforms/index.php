<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<div class="container">
    <h1>Web Forms</h1>
    <form action="index.php" method="get">
        <div class="form-group">
            <label for="number1">number 1 </label>
            <input type="number" class="form-control"
                id="number1"
                name="number1"
                value="<?php
                        if(isset($_GET['number1'])) {
                            echo $_GET['number1'];
                        }
                    ?>" required>
        </div>

        <div class="form-group">
            <label for="number2">number 2 </label>
            <input type="number" class="form-control" id="number2" name="number2"
                   value="<?php
                                if(isset($_GET['number2'])) {
                                    echo $_GET['number2'];
                                }
                            ?>" required>
        </div>

        <div class="form-group text-center">

            <input type="submit" class="btn btn-success" value="Send" name="btn_submit">
        </div>
    </form>

    <div class="result">
        <?php
            $errors = array();

            if(isset($_GET['btn_submit'])) {
                if(!isset($_GET['number1'])) {
                $errors[] = 'Set Number 1';
                } elseif(empty($_GET['number1'])) {
                    $errors[] =  'Enter Number 1';
                } elseif(!is_numeric($_GET['number1'])) {
                    $errors[] =  'Number 1 should be number';
                }

                if(!isset($_GET['number2'])) {
                    $errors[] =  'Set Number 2';
                } elseif(empty($_GET['number2'])) {
                    $errors[] =  'Enter Number 1';
                } elseif(!is_numeric($_GET['number2'])) {
                    $errors[] =  'Number 2 should be number';
                }

                if(empty($errors)) {
                    echo $_GET['number2'] + $_GET['number1'];
                } else {
                    print_r($errors);
                }

                print_r($_GET);

            }

         ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>