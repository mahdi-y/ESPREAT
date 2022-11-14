<?php
include 'C:\xampp\htdocs\espreat\ESPREAT\ESPREAT\connect.php';

if(isset($_GET['deleteid'])){

    $idC=$_GET['deleteid'];
    $sql="delete from `category` where idC=$idC";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Deleted successfully";
        header("location:backcategories.php");
    }else{
        die(mysqli_connect($con));
    }
}
?>