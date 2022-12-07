<?php

session_start();
include('../../config.php');

?>

<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
<?php
if(isset($_SESSION['message'])) :
  ?>
  <h5 class="alert alert-success"><?=$_SESSION['message']?></h5>
  
  <?php 
unset($_SESSION['message']);
endif; 
?>
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Categories</h6>
                        <a href="addcategory.php">Add category</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    
                                    <th scope="col">Name</th>
    
                                    <th scope="col">Actions</th>

                                </tr>
                            </thead>
                            <tbody>

                            <?php
                           

$query = "SELECT * FROM category" ;
$statement = $conn->prepare($query);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_OBJ);
$result = $statement->fetchAll();
if($result)
{
foreach($result as $row)
{
  ?>
 <tr>
    <td><?=$row->nameC;?></td>
    
    <td><a class="btn btn-sm btn-primary" href="updatecategory.php?updateid=<?=$row->idC;?>">Update</a>
        <a class="btn btn-sm btn-primary" href="deletecategory.php?deleteid=<?=$row->idC;?>">Delete</a></td>
</tr> 
  <?php
}
}
else
{

  ?>
  <tr>
    <td colspan="2"->No Record Found></td>
</tr> 
  <?php

}

?>
                                
       
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->
        
                    <?php include('footer.php'); ?>
                    </body>

</html>