<?php
include 'C:\xampp\htdocs\espreat\ESPREAT\ESPREAT\connect.php';

if (isset($_POST['submit'])) {

    $nameP=$_POST['nameP'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $image=$_POST['image'];
    $description=$_POST['description'];
    $fkC=$_POST['fkC'];

   /* if($_FILES["image"]["error"] === 4){
        echo 
        "<script> alert('Image Does Not Exist');</script>";
    }else{
        $filename = $_FILES["image"]["name"];
        $filename = $_FILES["image"]["size"];
        $filename = $_FILES["image"]["tmp_name"];

        $validImageExtension = ['jpg','jpeg','png'];
        $imageExtension = explose('.', $filename);
        $imageExtension = strtolower(end($imageExtension));
        if(!in_array($imageExtension, $validImageExtension)){
            echo 
        "<script> alert('Invalid image Extension');</script>";
        }else{
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;

            move_uploaded_file($tmpName, 'img/', $newImageName);


        }

    }
*/
    $sql="insert into `product` (nameP,price,image,quantity,description,fkC)
    values('$nameP','$price','$image', '$quantity','$description','$fkC')";

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
<form method="post">
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
                            <input type="float" class="form-control" name="price" placeholder="price">
                            <label>Price</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="number" class="form-control" name="quantity" placeholder="quantity">
                            <label >Quantity</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" name="image" placeholder="image url" accept=".jpg, .jpeg, .png">
                            <label>Image url</label>
                        </div>



                        <div class="form-floating mb-4">
                            <input type="description" class="form-control" name="description" placeholder="description">
                            <label>Description</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" name="fkC" placeholder="category">
                            <label>Category</label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="submit">Add product</button>
                       
                       
                    </div>
                </div>
            </div>
            </form>
        </div>

<?php include('footer.php'); ?>
</body>

</html>