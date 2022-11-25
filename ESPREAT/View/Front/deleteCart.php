<?php
include 'connect.php';
if(isset($_GET['deleteidProduit'])){
    $idProduit = $_GET['deleteidProduit'];
    $sql="delete from `panier` where idProduit=$idProduit";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "deleted successfully";
        header('location:cart.php');
    }else {
        die(mysqli_error($con));
    }
}


?>