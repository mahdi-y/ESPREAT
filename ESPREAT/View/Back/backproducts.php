<?php

include 'C:\xampp\htdocs\espreat\ESPREAT\ESPREAT\connect.php';


?>

<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    
                    <div class="d-flex align-items-center justify-content-between mb-4">
                    
                        <h6 class="mb-0">Products</h6>
                        <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" id="search" placeholder="Search">
                </form>
                        <a href="addproduct.php">Add product</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Actions</th>

                                </tr>
                            </thead>
                            <tbody id="output">


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
        <td><img height="80" width="80" src="img/'.$image.' " alt=""> </td> 
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <script type="text/javascript">
  $(document).ready(function(){
    $("#search").keypress(function(){
      $.ajax({
        type:'POST',
        url:'searchProducts.php',
        data:{
          nameP:$("#search").val(),
        },
        success:function(data){
          $("#output").html(data);
        }
      });
    });
  });
</script>

</body>

</html>
                        