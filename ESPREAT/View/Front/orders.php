<?php
include 'connect.php';
session_start();
if(!isset($_SESSION["identifiant"])){
    header("location:login.php");
}
$user_id = $_SESSION["identifiant"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>orders</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/foodhut.css">

</head>
<body>
   
<?php include 'header.php'; ?>
<?php include ('navbar-logout.php'); ?>

<section class="orders" style="margin-top: 150px;">

   <h1 class="heading" style="margin-left: 500px; margin-bottom: 50px; color: azure;">Placed Orders</h1>

   <div class="box-container" style="margin-left: 40px;">

   <?php
      if($user_id == ''){
         echo '<p class="empty">please login to see your orders</p>';
      }else{
         $select_orders = $db->prepare("SELECT * FROM `orders` WHERE user_id = ?");
         $select_orders->execute([$user_id]);
         if($select_orders->rowCount() > 0){
            while($fetch_orders = $select_orders->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="box" style="border: 3px solid #575a5e; padding: 20px; width: 500px; float: left; margin-right: 25px;margin-bottom: 25px; background-color: #575a5e; border-radius: 10px;">
      <p>placed on : <span><?= $fetch_orders['placed_on']; ?></span></p>
      <p>number : <span><?= $fetch_orders['number']; ?></span></p>
      <p>bloc : <span><?= $fetch_orders['bloc']; ?></span></p>
      <p>your orders : <span><?= $fetch_orders['total_products']; ?></span></p>
      <p>total price : <span><?= $fetch_orders['total_price']; ?>dt</span></p>
      <p> payment status : <span style="color:<?php if($fetch_orders['payment_status'] == 'Pending'){ echo 'red'; }else{ echo '#a3c14a'; }; ?>"><?= $fetch_orders['payment_status']; ?></span> </p>
   </div>
   <?php
      }
      }else{
         echo '<p class="empty">no orders placed yet!</p>';
      }
      }
   ?>
   </div>
</section>



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















<script src="js/script.js"></script>

</body>
</html>