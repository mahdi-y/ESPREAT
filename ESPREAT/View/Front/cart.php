<?php

include 'connect.php';

session_start();
if(!isset($_SESSION["identifiant"])){
    header("location:login.php");
}

$user_id = $_SESSION["identifiant"];

if(isset($_POST['delete'])){
   $cart_id = $_POST['cart_id'];
   $delete_cart_item = $db->prepare("DELETE FROM panier WHERE id = ?");
   $delete_cart_item->execute([$cart_id]);
}

if(isset($_GET['delete_all'])){
   $delete_cart_item = $db->prepare("DELETE FROM panier WHERE user_id = ?");
   $delete_cart_item->execute([$user_id]);
   header("location:cart.php");
}

if(isset($_POST['update_quantity'])){
   $cart_id = $_POST['cart_id'];
   $quantity = $_POST['quantity'];
   $quantity = filter_var($quantity, FILTER_SANITIZE_STRING);
   $update_quantity = $db->prepare("UPDATE panier SET quantity = ? WHERE id = ?");
   $update_quantity->execute([$quantity, $cart_id]);

}

?>

<?php include('header.php'); ?>

<?php include ('navbar-logout.php'); ?>

 <form action="" method="GET">

<div class="" style="margin-top: 150px ; margin-left: 170px;">
                  <div class="col-md-10">
                     <div class="input-group mb-3">
                        <select name="sort_numeric" class="form-control" >
                        <option value="">Select Option</option>
                        <option value="low-high"<?php if (isset($_GET['sort_numeric']) && $_GET ['sort_numeric']=="low-high" ) {echo "selected";}?>>Low - High</option>
                        <option value="high-low"<?php if (isset($_GET['sort_numeric']) && $_GET ['sort_numeric']=="high-low" ) {echo "selected";}?>>High - Low</option>
  </select>
  <button type ="submit" class="btn btn-primary"style="margin-left: 10px;width: 10%;">Filter</button>
  </div>
  </div>
  </div>
</form>

    <section class="" style="margin-left: 45px;">
   <div class="container" style="margin-top: 40px; text-align: center;">
   <?php

$sort_option = "";
  if (isset($_GET['sort_numeric']))
  {
    if ($_GET['sort_numeric'] == "low-high") 
    {$sort_option = "ASC";}
    elseif($_GET['sort_numeric'] == "high-low")  {
      $sort_option = "DESC"; }
  }

      $grand_total = 0;
      $select_cart = $db->prepare("SELECT * FROM panier  WHERE user_id = ? ORDER BY panier.price $sort_option");
      $select_cart->execute([$user_id]);
      if($select_cart->rowCount() > 0){
         while($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)){
   ?>
   <center>
   <div class="sub-box" style="float: left; margin-right: 30px; overflow: hidden; border: 2px solid #575a5e; padding: 16px; background-color: #575a5e; border-radius: 10px; margin-top: 25px; text-align:center; margin-bottom: 50px;">
   <form action="" method="post"  autocomplete="off">
      <input type="hidden" name="cart_id" value="<?= $fetch_cart['id']; ?>">
      
      <div>
      <img height="180" width="300" src="../Back/img/<?=$fetch_cart['image'];?> " alt=""
     >
         </div>
      <div class="name" style="text-align: center; font-size: 30px;"><?= $fetch_cart['name']; ?></div>
      
         <div class="price" style="text-align: center; margin-bottom: 10px; font-size: 25px;"><?= $fetch_cart['price']; ?>dt</div>
         <div>
      <p ><?=$fetch_cart ['description'];?></p>
         </div>
         <input style="height: 40px; width: 80px; border-color: #6c757d;margin-left: 35px;" type="number" name="quantity" class="quantity form-control form-control-lg custom-form-control col-md-5" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="<?= $fetch_cart['quantity']; ?>">
         <button type="submit" class="btn btn-secondary" name="update_quantity" style="margin-left: 160px; margin-top: -70px;">update</button>
      <div class="sub-total" style="text-align: center; margin-top: -12px; font-size: 20px; margin-bottom: 12px;"> sub total : <span><?= $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>dt</span> </div>
      <input style="margin: auto;" type="submit" value="delete item" onclick="return confirm('delete this from cart?');" class="btn btn-danger" name="delete">
      </div>
         </center>
   </form>
   <?php
   $grand_total += $sub_total;
      }
   }else{
      echo '<p class="empty" style="margin-top: -100px ;margin-left: -75px; font-size: 25px; text-align: center; clear: both;">your cart is empty!</p>';
   }
   ?>
   
      <div class="" style="clear: both;  margin-left: auto;margin-top: 500px;">
      <p style="font-size: 24px; margin-bottom: 15px;">grand total : <span><?= $grand_total; ?>dt</span></p>
      <a href="listproduct.php" class="btn btn-success text-white">continue shopping</a>
      <a href="cart.php?delete_all" class="btn btn-danger text-white <?= ($grand_total > 1)?'':'disabled'; ?>" onclick="return confirm('delete all from cart?');">delete all item</a>
      <a href="checkout.php" class="btn btn-secondary<?= ($grand_total > 1)?'':'disabled'; ?>">proceed to checkout</a>
      </div>
      </div>
</section>
<br>
<br>
<div
      class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center "
      style="margin-top: 50px;"
    >
      <div class="row">
        <div class="col-sm-4">
          <h3>EMAIL US</h3>
          <p class="text-muted">contact@espreat.tn</p>
        </div>
        <div class="col-sm-4">
          <h3>CALL US</h3>
          <p class="text-muted">(216) 70-255-255</p>
        </div>
        <div class="col-sm-4">
          <h3>FIND US</h3>
          <p class="text-muted">
            2083 Cebalat Ben Ammar ST Fethi Zouhir, Tunis
          </p>
        </div>
      </div>
    </div>
</html>