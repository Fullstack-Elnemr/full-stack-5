<?php
print_r($_GET);
$products = [
    'item1',
    'item2',
    'item3'
];


?>

<form>

    <select name="product">
        <option value="-1"> Select Your Option </option>
        <?php
        for ($i=0; $i< count($products); $i++) {
            if(isset($_GET['product'])) {
                if($i == $_GET['product']) {
                    echo "<option value='$i' selected>" . $products[$i] . "</option>";
                } else {
                    echo "<option value='$i'>" . $products[$i] . "</option>";
                }
            } else {
                echo "<option value='$i'>" . $products[$i] . "</option>";
            }
        }
        ?>
    </select>

    <input type="submit">

</form>

