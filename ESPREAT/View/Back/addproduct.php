<?php
include 'C:\xampp\htdocs\espreat\ESPREAT\ESPREAT\connect.php';
/*
include 'C:\xampp\htdocs\espreat\ESPREAT\ESPREAT\Controller\crudproduct.php';


$error = "";

$product = null;

$crudproduct= new crudproduct();

if (
    isset($_POST["nameP"]) &&
    isset($_POST["price"]) &&
    isset($_POST["quantity"]) &&
    isset($_POST["image"]) &&
    isset($_POST["description"])
) {
    if (
        !empty($_POST['nameP']) &&
        !empty($_POST["price"]) &&
        !empty($_POST["quantity"]) &&
        !empty($_POST["image"]) &&
        !empty($_POST["description"])
    ) {
        $product = new product(
            null,
            $_POST['idP'],
            $_POST['nameP'],
            $_POST['price'],
            $_POST['quantity'],
            $_POST['image'],
            $_POST['description']
            
        );
        $crudproduct->addProduct($product);
        header('Location:backproducts.php');
    } else
    $error = "Missing information";
}*/

if (isset($_POST['submit'])) {

    $nameP=$_POST['nameP'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $image=$_POST['image'];
    $description=$_POST['description'];
    $fkC=$_POST['fkC'];

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
                            <label >name</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="float" class="form-control" name="price" placeholder="price">
                            <label>price</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="number" class="form-control" name="quantity" placeholder="quantity">
                            <label >quantity</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" name="image" placeholder="image url">
                            <label>image url</label>
                        </div>



                        <div class="form-floating mb-4">
                            <input type="description" class="form-control" name="description" placeholder="description">
                            <label>description</label>
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