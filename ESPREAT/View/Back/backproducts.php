<?php

include 'C:\xampp\htdocs\espreat\ESPREAT\ESPREAT\connect.php';
//require '..\ESPREAT\config.php';
//require 'C:\xampp\htdocs\espreat\ESPREAT\ESPREAT\Controller\crudproduct.php';
//include 'C:\xampp\htdocs\espreat\ESPREAT\ESPREAT\Controller\crudproduct.php';
//$crudproduct = new crudproduct();
//$list = $crudproduct->listProduits();


?>

<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Products</h6>
                        <a href="addproduct.php">Add product</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    
                                    <th scope="col">name</th>
                                    <th scope="col">price</th>
                                    <th scope="col">quantity</th>
                                    <th scope="col">image</th>
                                    <th scope="col">description</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Actions</th>

                                </tr>
                            </thead>
                            <tbody>

                            <?php
$sql="select * from `product`";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $idP=$row['idP'];
        $nameP=$row['nameP'];
        $price=$row['price'];
        $quantity=$row['quantity'];
        $image=$row['image'];
        $description=$row['description'];
        $fkC=$row['fkC'];
        echo'<tr>
                                    
        <td>'.$nameP.'</td>
        <td>'.$price.' DT</td>
        <td>'.$quantity.'</td>
        <td>'.$image.'</td>
        <td>'.$description.'</td>
        <td>'.$fkC.'</td>

        <td><a class="btn btn-sm btn-primary" href="updateproduct.php?updateid='.$idP.'">Update</a>
        <a class="btn btn-sm btn-primary" href="deleteproduct.php?deleteid='.$idP.'">Delete</a></td>
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
                        