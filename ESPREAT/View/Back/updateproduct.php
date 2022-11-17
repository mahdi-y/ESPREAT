<?php
include 'C:\xampp\htdocs\espreat\ESPREAT\ESPREAT\connect.php';

$idP=$_GET['updateid'];

$sql="select * from `product` where idP=$idP";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

        $nameP=$row['nameP']; 
        $price=$row['price'];
        $quantity=$row['quantity'];
        $image=$row['image'];
        $description=$row['description'];
        $fkC=$row['fkC'];

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


if( $result) {
echo "</br>image uploaded"; 
}


$sql="update `product` set idP=$idP,nameP='$nameP',price='$price',image='$filename',quantity='$quantity',description='$description',fkC='$fkC' where idP=$idP";


    $result=mysqli_query($con,$sql);
    if ($result) {
        //echo "data updated successfully";
       header('location:backproducts.php');
    } else {
        die (mysqli_error($con));
    }
}

?>

<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

<div class="container-fluid">
<form method="post" enctype="multipart/form-data">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                
                            </a>
                            <h3>Update product</h3>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nameP"  placeholder="name" value=<?php echo $nameP; ?>>
                            <label >name</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="float" class="form-control" name="price" placeholder="price" value=<?php echo $price; ?>>
                            <label>price</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="number" class="form-control" name="quantity" placeholder="quantity" value=<?php echo $quantity; ?>>
                            <label >quantity</label>
                        </div>


                        <div class="form-floating mb-4">
                            <input type="file" class="form-control" name="fileToUpload" placeholder="image" id="fileToUpload" value=img/<?php echo $image; ?> >
                            <label>Image</label>
                        </div>


                        
                        <div class="form-floating mb-4">
                            <input type="description" class="form-control" name="description" placeholder="description" value=<?php echo $description; ?>>
                            <label>description</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" name="fkC" placeholder="category" value=<?php echo $fkC; ?>>
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