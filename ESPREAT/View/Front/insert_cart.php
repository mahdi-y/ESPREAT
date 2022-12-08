<?php

if(isset($_POST['add_to_cart'])){

   $pid = $_POST['pid'];
   $pid = filter_var($pid, FILTER_SANITIZE_STRING);
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $price = $_POST['price'];
   $price = filter_var($price, FILTER_SANITIZE_STRING);
   $quantity = $_POST['quantity'];
   $quantity = filter_var($quantity, FILTER_SANITIZE_STRING);
   $image = $_POST['image'];
   $image = filter_var($image, FILTER_SANITIZE_STRING);
   $description = $_POST['description'];
   $description = filter_var($description, FILTER_SANITIZE_STRING);

   $check_cart_numbers = $db->prepare("SELECT * FROM `panier` WHERE name = ? AND user_id = ?");
   $check_cart_numbers->execute([$name, $user_id]);

   if($check_cart_numbers->rowCount() > 0){
      echo '<script>alert("already added to cart!")</script>';
   }else{
      $insert_cart = $db->prepare("INSERT INTO `panier`(user_id, pid, name, price, quantity, image, description) VALUES(?,?,?,?,?,?,?)");
      $insert_cart->execute([$user_id, $pid, $name, $price, $quantity,$image, $description]);
      header("location:cart.php");;
      
   }

}

