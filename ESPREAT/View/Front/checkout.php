<?php

include 'connect.php';

session_start();

if(!isset($_SESSION["identifiant"])){
    header("location:login.php");
}

$user_id = $_SESSION["identifiant"];

if(isset($_POST['order'])){

   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $bloc = $_POST['bloc'];
   $bloc = filter_var($bloc, FILTER_SANITIZE_STRING);
   $total_products = $_POST['total_products'];
   $total_products = filter_var($total_products, FILTER_SANITIZE_STRING);
   $total_price = $_POST['total_price'];
   $total_price = filter_var($total_price, FILTER_SANITIZE_STRING);
   $check_cart = $db->prepare("SELECT * FROM `panier` WHERE user_id = ?");
   $check_cart->execute([$user_id]);

   if($check_cart->rowCount() > 0){

      $insert_order = $db->prepare("INSERT INTO `orders`(user_id,  number, bloc, total_products, total_price) VALUES(?,?,?,?,?)");
      $insert_order->execute([$user_id, $number, $bloc, $total_products, $total_price]);

      $delete_cart = $db->prepare("DELETE FROM `panier` WHERE user_id = ?");
      $delete_cart->execute([$user_id]);

      echo '<script>alert("order placed successfully!")</script>';
   }else{
      echo '<script>alert("your cart is empty")</script>';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/foodhut.css">

</head>
<body>
   
<?php include 'header.php'; ?>
<?php include ('navbar-logout.php'); ?>

<section class="checkout-orders" style="margin-top: 250px; margin-left: 100px;">

   <form action="" method="POST">

   <h3>your orders</h3>

      <div class="display-orders">
      <?php
         $grand_total = 0;
         $cart_items[] = '';
         $select_cart = $db->prepare("SELECT * FROM `panier` WHERE user_id = ?");
         $select_cart->execute([$user_id]);
         if($select_cart->rowCount() > 0){
            while($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)){
               $cart_items[] = $fetch_cart['name'].' ('.$fetch_cart['price'].' x '. $fetch_cart['quantity'].') - ';
               $total_products = implode($cart_items);
               $grand_total += ($fetch_cart['price'] * $fetch_cart['quantity']);
      ?>
         <p> <?= $fetch_cart['name']; ?> <span>(<?= $fetch_cart['price'].'dt x '. $fetch_cart['quantity']; ?>)</span> </p>
      <?php
            }
         }else{
            echo '<p class="empty">your cart is empty!</p>';
         }
      ?>
         <input type="hidden" name="total_products" value="<?= $total_products; ?>">
         <input type="hidden" name="total_price" value="<?= $grand_total; ?>" value="">
         <div class="grand-total">grand total : <span><?= $grand_total; ?>dt</span></div>
      </div>

      <h3>place your orders</h3>

      <div class="flex">
         <div class="inputBox">
            <input type="number" name="number" placeholder="enter your number" class="form-control form-control-lg custom-form-control col-sm-6 col-md-3 col-xs-12 my-2" min="0" max="9999999999" onkeypress="if(this.value.length == 10) return false;" required>
         </div>
         <div class="inputBox">
            <input type="text" name="bloc" placeholder="enter your building name e.g. bloc H" class="form-control form-control-lg custom-form-control col-sm-6 col-md-3 col-xs-12 my-2" maxlength="50" style="margin-top: 10px ;" required>
         </div>
      </div>

      <input type="submit" name="order" class="btn btn-primary <?= ($grand_total > 1)?'':'disabled'; ?>" value="place order">

   </form>

</section>















<script src="js/script.js"></script>

</body>
</html>