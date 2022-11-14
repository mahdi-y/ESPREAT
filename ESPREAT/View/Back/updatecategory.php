<?php
include 'C:\xampp\htdocs\espreat\ESPREAT\ESPREAT\connect.php';

$idC=$_GET['updateid'];

$sql="select * from `category` where idC=$idC";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

        $nameC=$row['nameC']; 


if (isset($_POST['submit'])) {

    $nameC=$_POST['nameC'];

    $sql="update `category` set idC=$idC,nameC='$nameC' where idC=$idC";

    $result=mysqli_query($con,$sql);
    if ($result) {
        //echo "data updated successfully";
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
                            <h3>Update category</h3>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nameC"  placeholder="name" value=<?php echo $nameC; ?>>
                            <label >Name</label>
                        </div>

                        
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="submit">Update category</button>
                       
                       

                    </div>
                </div>
            </div>
            </form>
        </div>

<?php include('footer.php'); ?>
</body>

</html>