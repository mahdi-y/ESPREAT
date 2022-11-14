<?php
include 'C:\xampp\htdocs\espreat\ESPREAT\ESPREAT\connect.php';

if (isset($_POST['submit'])) {

    $nameC=$_POST['nameC'];

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
    $sql="insert into `category` (nameC)
    values('$nameC')";

    $result=mysqli_query($con,$sql);
    if ($result) {
       // echo "data inserted successfully";
       header('location:backcategories.php');
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
                            <h3>Add category</h3>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nameC"  placeholder="name">
                            <label >Name</label>
                        </div>

                        
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="submit">Add category</button>
                       
                       
                    </div>
                </div>
            </div>
            </form>
        </div>

<?php include('footer.php'); ?>
</body>

</html>