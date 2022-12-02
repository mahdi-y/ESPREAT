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


<section class="products" style="margin-top: 150px;">

   <h1 class="heading" style="margin-left: 500px;">Latest Products</h1>

   <div class="box-container">

   <?php
     $select_products = $db->prepare("SELECT * FROM `produit`"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="" style="margin-left: 250px;">
   <form action="" method="post" class="box">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span></span><?= $fetch_product['price']; ?><span>dt</span></div>
         <input type="number" name="quantity" class="quantity" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="add to cart" class="btn btn-primary" name="add_to_cart"
      style="margin-top: 5px;">
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