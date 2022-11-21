<?php
include 'D:\xamp\htdocs\web\ESPREAT\ESPREAT\View\Back\connect.php';
include 'D:\xamp\htdocs\web\ESPREAT\ESPREAT\Controller\crudAssociation.php';

if(isset($_GET['deleteid'])){

   $idA=$_GET['deleteid'];
   /* $sql="delete from `association` where idA=$idA";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Deleted successfully";
        header('location:backtab.php');
    }else{
        die(mysqli_connect($con));


    }*/

    
}

$c= new crudassociation();
    $c->deleteassociation($idA);
    echo "<script>location.href='backtab.php';</script>";
?>