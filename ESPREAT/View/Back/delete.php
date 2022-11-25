<?php
include 'connect.php';

if(isset($_GET['deleteid'])){
    $idClient=$_GET['deleteid'];
    $sql="delete from client where idClient=$idClient";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "deleted ";
        header('location:table.php');
    }
    else
    {
        die(mysqli_error($conn));
    }
}

?> 