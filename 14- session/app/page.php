<?php
//Run Action
if(isset(
    $_GET['result'],
    $_GET['customer_name'],
    $_GET['date'],
    $_GET['product_name'],
    $_GET['product_price'],
    $_GET['quantity'],
    $_GET['product_name2'],
    $_GET['product_price2'],
    $_GET['quantity2'],
    $_GET['discount'])) {
    //validation
    $errors = [];
    //global
    if(empty($_GET['customer_name'])) {
        $errors[] = 'customer name Empty';
    }
    if(empty($_GET['date'])) {
        $errors[] = 'date Empty';
    }
    if(!is_numeric($_GET['discount'])) {
        $errors[] = 'discount Empty';
    }


    //product 1
    if(empty($_GET['product_name'])) {
        $errors[] = 'Product 1 Empty';
    }
    if(!is_numeric($_GET['product_price'])) {
        $errors[] = 'Price Product 1 Should be number';
    }

    if(!is_numeric($_GET['quantity'])) {
        $errors[] = 'Quantity Product 1 Should be number';
    }
    //product 2
    if(empty($_GET['product_name2'])) {
        $errors[] = 'Product 2 Empty';
    }
    if(!is_numeric($_GET['product_price2'])) {
        $errors[] = 'Price Product 2 Should be number';
    }

    if(!is_numeric($_GET['quantity2'])) {
        $errors[] = 'Quantity Product 2 Should be number';
    }


    if(empty($errors)) {
        //global
        $discount = $_GET['discount'];
        $customer = $_GET['customer_name'];
        $date = $_GET['date'];

        //product 1 data
        $product1_name = $_GET['product_name'];
        $product1_price = $_GET['product_price'];
        $product1_quantity = $_GET['quantity'];
        $subTotal1 = $product1_price * $product1_quantity;

        //product 2 data
        $product2_name = $_GET['product_name2'];
        $product2_price = $_GET['product_price2'];
        $product2_quantity = $_GET['quantity2'];
        $subTotal2 = $product2_price * $product2_quantity;

        //total
        $total = ($subTotal1 + $subTotal2) - $discount;
    }
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
    Cus.Name: <input type="text" name="customer_name">
    Date: <input type="date" name="date">
    <hr>
    <table>
        <tr>
            <th>#</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Quantity</th>
            <th>Sub-Total</th>
        </tr>
        <tr>
            <td>1</td>

            <td><input type="text"
                       name="product_name"
                       value="<?php
                                   if(isset($product1_name)) {
                                       echo $product1_name;
                                   }
                                ?>"></td>

            <td><input type="number"
                       name="product_price"
                       value="<?php
                       if(isset($product1_price)) {
                           echo $product1_price;
                       } else{
                           echo 0;
                       }
                       ?>"></td>

            <td><input type="number"
                       name="quantity"
                       value="<?php
                       if(isset($product1_quantity)) {
                           echo $product1_quantity;
                       } else{
                           echo 1;
                       }
                       ?>"></td>

            <td>
                <?php
                if(isset($subTotal1)) {
                    echo $subTotal1;
                }else {
                    echo 0;
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td><input type="text"
                       name="product_name2"
                       value="<?php
                       if(isset($product2_name)) {
                           echo $product2_name;
                       }
                       ?>"></td>

            <td><input type="number"
                       name="product_price2"
                       value="<?php
                       if(isset($product2_price)) {
                           echo $product2_price;
                       } else{
                           echo 0;
                       }
                       ?>"></td>

            <td><input type="number"
                       name="quantity2"
                       value="<?php
                       if(isset($product2_quantity)) {
                           echo $product2_quantity;
                       } else{
                           echo 1;
                       }
                       ?>"></td>

            <td>
                <?php
                if(isset($subTotal2)) {
                    echo $subTotal2;
                }else {
                    echo 0;
                }
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="text-align: right">Discount</td>
            <td><input type="number"
                       name="discount"
                       value="<?php
                       if(isset($discount)) {
                           echo $discount;
                       } else {
                           echo 0;
                       }
                       ?>">
        </tr>
        <tr>
            <td colspan="4" style="text-align: right">Total</td>
            <td>
                <?php
                if(isset($total)) {
                    echo $total;
                }else {
                    echo 0;
                }
                ?>
            </td>
        </tr>
    </table>

    <input type="submit" name="result" value="Result">
<!--    <input type="reset" name="reset" value="reset">-->
    <a href="page.php">Reset</a>


</form>
<div class="errors">
    <?php
        if(!empty($errors) && isset($errors)) {
            print_r($errors);
        }
    ?>
</div>
</body>
</html>
