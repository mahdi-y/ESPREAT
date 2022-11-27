<?php
session_start();
include ('../../config.php');
if (isset($_POST['submit']))
 {
    $idP=$_POST['idP'];
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
    
try {
$query = "UPDATE product SET nameP=:nameP, price=:price, quantity=:quantity, image=:filename, description=:description, fkC=:fkC where idP= $idP LIMIT 1";
$statement = $conn ->prepare($query);
$data = [
    //':idP' => $idP,
    ':nameP' => $nameP,
    ':price' => $price,
    ':quantity' => $quantity,
    ':filename' => $filename,
    ':description' => $description,
    ':fkC' => $fkC
    
];
$query_execute = $statement->execute($data);
if ($query_execute) {
    $_SESSION['message']="updated successfully";
     header('location:backproducts.php');
     exit(0);
  } 
  else
   {
     $_SESSION['message']="not updated successfully";
     header('location:backproducts.php');
     exit(0);
  }
}
catch (PDOException $e) 
{
echo $e->getMessage();
}

}
?>

<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

<div class="container-fluid">
    <?php
    if (isset($_GET['updateid']))
    {
        $idP=$_GET['updateid'];
        $query = "SELECT * FROM product WHERE idP = :idP LIMIT 1";
        $statement = $conn ->prepare($query);
        $data = [
            ':idP' => $idP
        ];
        $statement->execute($data);
       $result = $statement->fetch(PDO::FETCH_OBJ);
    }
    
    ?>
<form method="POST" enctype="multipart/form-data">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                
                            </a>
                            <h3>Update product</h3>
                        </div>

                        <input type="hidden" class="form-control" name="idP" value="<?=$result->idP;?>">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nameP"  placeholder="name" 
                            value="<?=$result->nameP; ?>">
                            <label >name</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="float" class="form-control" name="price" placeholder="price" 
                            value="<?=$result->price; ?>">
                            <label>price</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="number" class="form-control" name="quantity" placeholder="quantity" value="<?=$result->quantity; ?>">
                            <label >quantity</label>
                        </div>


                        <div class="form-floating mb-4">
                            <input type="file" class="form-control" name="fileToUpload" placeholder="image" id="fileToUpload" 
                            value="img/<?=$result->image; ?>" >
                            <label>Image</label>
                        </div>


                        
                        <div class="form-floating mb-4">
                            <input type="description" class="form-control" name="description" placeholder="description" 
                            value="<?=$result->description; ?>">
                            <label>description</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" name="fkC" placeholder="category"
                             value="<?=$result->fkC; ?>">
                            <label>Category</label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="submit">Update product</button>
                       
                       

                    </div>
                </div>
            </div>
            </form>
        </div>

<?php include('footer.php'); ?>
</body>

</html>