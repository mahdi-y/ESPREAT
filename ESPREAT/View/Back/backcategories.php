<?php

include 'C:\xampp\htdocs\espreat\ESPREAT\ESPREAT\connect.php';


?>

<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">categories</h6>
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
$sql="select * from `category`";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $idC=$row['idC'];
        $nameC=$row['nameC'];

        echo'<tr>
                                    
        <td>'.$nameC.'</td>

        <td><a class="btn btn-sm btn-primary" href="updatecategory.php?updateid='.$idC.'">Update</a>
        <a class="btn btn-sm btn-primary" href="deletecategory.php?deleteid='.$idC.'">Delete</a></td>
    </tr>';
    } 
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
                        