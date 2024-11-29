<?php
     include("../Functions/functions.php");
     if(isset($_GET['id'])) {
          $product_id = $_GET['id'];
          $sel_price = "select * from cart where product_id = '$product_id'";
          $run_price = mysqli_query($con,$sel_price);
          while ($p_price = mysqli_fetch_array($run_price)) {
              $qty = $p_price['qty'];
             
          }
          $pro_price = "select * from products where product_id='$product_id'";
          $run_pro_price = mysqli_query($con, $pro_price);
        while ($pp_price = mysqli_fetch_array($run_pro_price)) {
            $price = $pp_price['product_price'];
        }
        if ($qty > 1) {
            $qty -= 1;
            $subtotal = $price * $qty;
            $sel_price = "UPDATE cart SET qty = '$qty', subtotal = '$subtotal' WHERE product_id = '$product_id'";
            $run_price = mysqli_query($con, $sel_price);
        } else {
            // If the quantity is already 1 or less, you may want to handle this case
            // For example, show a message to the user or remove the item from the cart
            echo "Quantity cannot be reduced further.";
        }
        

          echo "<script>window.open('CartPage.php','_self')</script>";
     }
