<?php
include 'C:\xampp\htdocs\espreat\ESPREAT\ESPREAT\connect.php';

if(isset($_GET['deleteid'])){

    $idP=$_GET['deleteid'];
    $sql="delete from `product` where idP=$idP";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Deleted successfully";
        header("location:backproducts.php");
    }else{
        die(mysqli_connect($con));
    }
}
?>