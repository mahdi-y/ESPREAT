<?php

include 'connect.php';

session_start();
if(!isset($_SESSION["identifiant"])){
    header("location:login.php");
}

$user_id = $_SESSION["identifiant"];

if(isset($_POST['delete'])){
   $cart_id = $_POST['cart_id'];
   $delete_cart_item = $db->prepare("DELETE FROM `panier` WHERE id = ?");
   $delete_cart_item->execute([$cart_id]);
}

if(isset($_GET['delete_all'])){
   $delete_cart_item = $db->prepare("DELETE FROM `panier` WHERE user_id = ?");
   $delete_cart_item->execute([$user_id]);
   header('location:cart.php');
}

if(isset($_POST['update_quantity'])){
   $cart_id = $_POST['cart_id'];
   $quantity = $_POST['quantity'];
   $quantity = filter_var($quantity, FILTER_SANITIZE_STRING);
   $update_quantity = $db->prepare("UPDATE `panier` SET quantity = ? WHERE id = ?");
   $update_quantity->execute([$quantity, $cart_id]);
   echo '<script>alert("cart quantity updated")</script>';

}

?>

<?php include('header.php'); ?>
<body>
   
<?php include 'navbar-logout.php'; ?>

<section class="products shopping-cart">


   <div class="box-container" >

   <?php
      $grand_total = 0;
      $select_cart = $db->prepare("SELECT * FROM `panier` WHERE user_id = ?");
      $select_cart->execute([$user_id]);
      if($select_cart->rowCount() > 0){
         while($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="box" style="margin-top: 250px;">
      <input type="hidden" name="cart_id" value="<?= $fetch_cart['id']; ?>">
      <a href="quick_view.php?pid=<?= $fetch_cart['pid']; ?>" class="fas fa-eye"></a>
      <div class="name"><?= $fetch_cart['name']; ?></div>
      <div class="flex">
         <div class="price"><?= $fetch_cart['price']; ?>dt</div>
         <input type="number" name="quantity" class="quantity" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="<?= $fetch_cart['quantity']; ?>">
         <button type="submit" class="btn btn-secondary" name="update_quantity">update</button>
      </div>
      <div class="sub-total"> sub total : <span><?= $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>dt</span> </div>
      <input type="submit" value="delete item" onclick="return confirm('delete this from cart?');" class="delete-btn" name="delete">
   </form>
   <?php
   $grand_total += $sub_total;
      }
   }else{
      echo '<p class="empty">your cart is empty</p>';
   }
   ?>
   </div>

   <div class="cart-total" style="margin-top: 250px;">
      <p>grand total : <span>$<?= $grand_total; ?>/-</span></p>
      <a href="produit.php" class="option-btn">continue shopping</a>
      <a href="cart.php?delete_all" class="delete-btn <?= ($grand_total > 1)?'':'disabled'; ?>" onclick="return confirm('delete all from cart?');">delete all item</a>
      <a href="#" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">proceed to checkout</a>
   </div>

</section>

</body>
</html>