<?php
session_start();
include '../../config.php';

if(isset($_GET['deleteid'])){

    $idC=$_GET['deleteid'];
    try{
    $query="DELETE FROM category where idC=$idC";
    $statement = $conn->prepare($query);

   /* $data = [
        ':idP' => $idP
        
    ];*/
    $query_execute = $statement->execute();

    if ($query_execute) {
        $_SESSION['message']="deleted successfully";
         header('location:backcategories.php');
         exit(0);
      } 
      else
       {
         $_SESSION['message']="not deleted successfully";
         header('location:backcategories.php');
         exit(0);
      }
    }catch(PDOException $e)
    {echo $e->getMessage();}
   
}
?>