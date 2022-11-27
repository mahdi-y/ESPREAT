<?php
session_start();
include '../../config.php';

if(isset($_GET['deleteid'])){

    $idP=$_GET['deleteid'];
    try{
    $query="DELETE FROM product where idP=$idP";
    $statement = $conn->prepare($query);

   /* $data = [
        ':idP' => $idP
        
    ];*/
    $query_execute = $statement->execute();

    if ($query_execute) {
        $_SESSION['message']="deleted successfully";
         header('location:backproducts.php');
         exit(0);
      } 
      else
       {
         $_SESSION['message']="not deleted successfully";
         header('location:backproducts.php');
         exit(0);
      }
    }catch(PDOException $e)
    {echo $e->getMessage();}
   
}
?>