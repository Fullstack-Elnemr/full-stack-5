<?php
if(isset($_GET['age'])) {
    $age = $_GET['age'];
} else {
    $age = 2;
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<form method="get">
    Name : <input type="text" name="name">
    <input type="hidden" name="action" value="add">
    Age <input type="number" name="age" value="<?php echo $_GET['age']; ?>">
    <input type="submit" value="Index" formaction="index.php">
    <input type="submit" value="Page" formaction="page.php">
</form>
</body>
</html>

