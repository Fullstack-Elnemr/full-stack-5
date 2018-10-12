<?php

$name = 'Ali Mohamed';
$mainColor = '#00F';
$y=5;
$x = $y;



?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="css/base.css">

        <style type="">
            h1{
                color: <?php echo $mainColor; ?>;
            }
            p{
                color: <?php echo $mainColor; ?>;
            }
            a{
                color: <?php echo $mainColor;  ?>;
            }
        </style>

        <title>Document</title>
    </head>
    <body>
        <div class="wrapper">
            <h1>Welcome Mr. <?php echo $name; ?></h1>
            <p>asd asda sad <?php echo $name; ?></p>

            <a href="#">link to <?php echo $name; ?></a>
        </div>

    </body>
</html>