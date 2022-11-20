<?php
include 'C:\xampp\htdocs\espreat\ESPREAT\ESPREAT\connect.php';

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
$sql="insert into `product` (nameP,price,image,quantity,description,fkC)
    values('$nameP','$price','$filename', '$quantity','$description','$fkC')";



    
    $result=mysqli_query($con,$sql);
    if ($result) {
       // echo "data inserted successfully";
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
                            <h3>Add product</h3>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nameP"  placeholder="name">
                            <label >Name</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="price" placeholder="price" min="0">
                            <label>Price</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="number" class="form-control" 
                            name="quantity" placeholder="quantity"
                            min="0">
                            <label >Quantity</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="file" class="form-control" name="fileToUpload" placeholder="image" id="fileToUpload">
                            <label>Image</label>
                        </div>



                        <div class="form-floating mb-4">
                            <input type="description" class="form-control" name="description" placeholder="description">
                            <label>Description</label>
                        </div>


                        <div class="form-floating mb-4">
                        
                        
<?php
                        if($r_set = $con->query("SELECT * from category")){

echo "<select idC=idC nameC=nameC class='form-control' style='width:256px;' name='fkC'>";

while ($row = $r_set->fetch_assoc()) {
echo "<option value=$row[idC]>$row[nameC]</option>";
}
echo "</select>";
}else{
echo $connection->error;
}
?>
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