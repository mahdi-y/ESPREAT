<?php include('connect.php') ?>
<?php
session_start();
include ('connect.php');
if(!isset($_SESSION["identifiant"])){
    header("location:login.php");
}

$user_id = $_SESSION['identifiant'];

include('insert_cart.php');

?>

<?php include('header.php') ?>
<?php include('navbar-logout.php') ?>

<style>
   input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

</style>

<section class="products" style="margin-top: 150px;">

   <h1 class="heading" style="margin-left: 500px; margin-bottom: 50px;">Latest Products</h1>

   <div class="box-container" style="margin-left: 100px;">

   <?php
     $select_products = $db->prepare("SELECT * FROM `produit`"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="" style="margin-left: 50px; float: left; border: 2px solid #575a5e; padding: 16px; background-color: #575a5e; border-radius: 10px;">
   <form action="" method="post" class="box" autocomplete="off">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span></span><?= $fetch_product['price']; ?><span>dt</span></div>
         <input type="number" name="quantity" class="form-control form-control-lg custom-form-control col-md-2 " min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1" style="text-align: center; width: 300px;">
      </div>
      <input type="submit" value="add to cart" class="btn btn-primary" name="add_to_cart"
      style="margin-top: 10px; margin-bottom: 25px; width: 150px;">
   </form>
   </div>
   <?php
      }
   }else{
      echo '<p class="empty">no products found!</p>';
   }
   ?>

   </div>

</section>