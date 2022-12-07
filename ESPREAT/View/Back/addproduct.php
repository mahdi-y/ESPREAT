<?php


session_start();
include ('../../config.php');
if (isset($_POST['submit'])) {

    $nameP=$_POST['nameP'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $image=$_POST['image'];
    $description=$_POST['description'];
    $fkC=$_POST['fkC'];

    //declaring variables
$filename = $_FILES['fileToUpload']['name'];
$filetmpname = $_FILES['fileToUpload']['tmp_name'];
//folder where images will be uploaded
$folder = 'img/';
//function for saving the uploaded images in a specific folder
move_uploaded_file($filetmpname, $folder.$filename);
//inserting image details (ie image name) in the database



/*if( $result) {
echo "</br>image uploaded"; 
}*/
    
    

    $query = "INSERT INTO product (nameP,price,image,quantity,description,fkC) VALUES (:nameP, :price, :filename, :quantity, :description, :fkC)";
    $query_run = $conn->prepare($query);

    $data = [
        ':nameP' => $nameP,
        ':price' => $price,
        ':filename' => $filename,
        ':quantity' => $quantity,
        ':description' => $description,
        ':fkC' => $fkC
        
    ];
    $query_execute = $query_run->execute($data);

    if ($query_execute) {
       $_SESSION['message']="inserted successfully";
        header('location:backproducts.php');
        exit(0);
     } 
     else
      {
        $_SESSION['message']="not inserted successfully";
        header('location:backproducts.php');
        exit(0);
     }

}

   
?>

<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

<div class="container-fluid">
<form  method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                
                            </a>
                            <h3>Add product</h3>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nameP"  placeholder="name" required/>
                            <label >Name</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="price" placeholder="price" min="0"required/>
                            <label>Price</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="number" class="form-control" 
                            name="quantity" placeholder="quantity"
                            min="0"required/>
                            <label >Quantity</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="file" class="form-control" name="fileToUpload" placeholder="image" id="fileToUpload"required/>
                            <label>Image</label>
                        </div>



                        <div class="form-floating mb-4">
                            <input type="description" class="form-control" name="description" placeholder="description"required/>
                            <label>Description</label>
                        </div>


                        <div class="form-floating mb-4">
                        
                        





<?php


$query = "SELECT * FROM category" ;
?>
<select idC=idC nameC=nameC class='form-control' style='width:256px;' name='fkC'>;
<?php
$statement = $conn->prepare($query);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_OBJ);
$result = $statement->fetchAll();

foreach($result as $row)
{
  ?>
  
  <option value=<?=$row->idC;?>><?=$row->nameC;?></option>;
  <?php
}
?>
   </select>
 


<label>Category</label>


</div>
<br>

                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="submit">Add product</button>
                       
                       
                    </div>
                </div>
            </div>
            </form>
        </div>

<?php include('footer.php'); ?>
</body>

</html>