<?php 
include ('connect.php');
session_start();

// echo $_SESSION['identifiant'];

$wherein = implode(', ', $_SESSION['cart']);

$sql = "SELECT * FROM produit WHERE addidProduit IN ($wherein)";



echo $wherein;

?>