<?php
include 'connect.php';
if(isset($_GET['deleteidCommande'])){
    $idCommande = $_GET['deleteidCommande'];
    $sql="delete from `commandes` where idCommande=$idCommande";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "deleted successfully";
        header('location:listCommandes.php');
    }else {
        die(mysqli_error($con));
    }
}


?>