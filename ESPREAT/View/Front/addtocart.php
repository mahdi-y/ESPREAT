<?php include('connect.php') ?>
<?php

session_start();

if(!isset($_SESSION["identifiant"])){
    header("location:login.php");
    $user_id = $_SESSION["identifiant"];
}

if (empty($_SESSION['cart'])){
   $_SESSION['cart'] = array();
}

array_push($_SESSION['cart'], $_GET['addidProduit']);


echo $_SESSION['identifiant'];

?>

<p>
    Product added successfully .
    <a href="listProductsCart.php">View Cart</a>
</p>
