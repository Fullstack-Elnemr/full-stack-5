<?php
include 'functions.php';
$subjects = [
    'PHP',
    'MYSQL',
    'HTML',
    'CSS'
];
$subjects[] = 'JS';
$subjects[] = 'C++';
$errors = [];

//print_r($_GET);

if(isset($_GET['send'])) {


    $result = sum($_GET['n1'],$_GET['n2'],$_GET['operation']);
    if($result['status']) {
        echo 'Your Result : ' . $result['value'];
    } else {
        echo 'You Have Error : ' . $result['mes'];
    }


    if(empty($_GET['name'])) {
        $errors[] = 'Name is Required';
    }
    if(!isset($_GET['subject'])) {
        $errors[] = 'subjects is Required';
    } elseif(count($_GET['subject']) < 2){
        $errors[] = 'at last two subject';
    } elseif(count($_GET['subject']) > 4) {
        $errors[] = 'apply less than 4 subject';
    }

    if(empty($errors)) {
        $sub = $_GET['subject'];
        for($i=0; $i < count($sub); $i++ ) {
            if(!is_numeric($sub[$i])) {
                $errors[] = "Subject index[$i] - should be number";
            }
        }
    }
}

print_r($errors);

?>

<form >
    Name: <input type="text" name="name">
    <br>
    Subjects:
    <?php
        for($counter = 0; $counter < count($subjects); $counter++) {
            ?>
            <input type="checkbox"
                   name="subject[]"
                   value="<?php echo $counter; ?>"> <?php echo $subjects[$counter]; ?>
            <?php
//            echo '<input type="checkbox" name="subject[]" value="' . $subjects[$counter] . '">' . $subjects[$counter];
        }
    ?>
    <br>
    n1: <input type="number" name="n1">
    operation <input type="text" name="operation">
    n2: <input type="number" name="n2">

    <input type="submit" name="send">
</form>
