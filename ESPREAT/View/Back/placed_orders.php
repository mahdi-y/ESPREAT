
<?php

include 'connect.php';



if(isset($_POST['update_payment'])){
   $order_id = $_POST['order_id'];
   $payment_status = $_POST['payment_status'];
   $payment_status = filter_var($payment_status, FILTER_SANITIZE_STRING);
   $update_payment = $db->prepare("UPDATE `orders` SET payment_status = ? WHERE id = ?");
   $update_payment->execute([$payment_status, $order_id]);
   $message[] = 'payment status updated!';
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_order = $db->prepare("DELETE FROM `orders` WHERE id = ?");
   $delete_order->execute([$delete_id]);
   header('location:placed_orders.php');
}

?>

<?php include ('header.php'); ?>
<?php include('navbar.php'); ?>


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="/css/style.css">


<body>


   





<h1 class="heading" style="margin-left : 350px; margin-top: 40px;">Placed Orders</h1>

<div class="box-container" style="margin-left : 100px; align-text: center;">

   <?php
      $select_orders = $db->prepare("SELECT * FROM `orders`");
      $select_orders->execute();
      if($select_orders->rowCount() > 0){
         while($fetch_orders = $select_orders->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="box" style="margin-top: 45px;margin-left: 50px; float: left;border: 2px solid #191c24; padding: 28px !important; border-radius: 10px; display: block; background-color: #191c24; position: relative; text-align: center;">
      <p> Costumer id : <span><?= $fetch_orders['user_id']; ?></span> </p>
      <p> placed on : <span><?= $fetch_orders['placed_on']; ?></span> </p>
      <p> number : <span><?= $fetch_orders['number']; ?></span> </p>
      <p> bloc : <span><?= $fetch_orders['bloc']; ?></span> </p>
      <p> total products : <span><?= $fetch_orders['total_products'];?></span></p>
      <p> total price : <span><?= $fetch_orders['total_price']; ?>dt</span> </p>
      <form action="" method="post">
         <input type="hidden" name="order_id" value="<?= $fetch_orders['id'];?>">
         <select name="payment_status" class="form-control form-control-sm custom-form-control col-md-1" style="width: 155px; text-align: center; background-color: #2b303e ; border-color: #2b303e; margin: auto; margin-bottom: 15px;">
            <option selected disabled><?= $fetch_orders['payment_status']; ?></option>
            <option value="Pending">Pending</option>
            <option value="Completed">Completed</option>
         </select>
        <div class="flex-btn" style="margin: auto;">
         <input type="submit" value="update" class="btn btn-success" name="update_payment" >
         <a href="placed_orders.php?delete=<?= $fetch_orders['id']; ?>" class="btn btn-danger" onclick="return confirm('delete this order?');">delete</a>

        </div>
      </form>
   </div>
   <?php
         }
      }else{
         echo '<p class="empty">no orders placed yet!</p>';
      }
   ?>

</div>
</section>












<script src="../js/admin_script.js"></script>
   
</body>
</html>