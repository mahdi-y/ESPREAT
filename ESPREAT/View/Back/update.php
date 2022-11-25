
<?php include('header.php'); ?>
<?php include('footer.php'); ?>  
<?php include('connect.php');?>

<?php
$idClient=$_GET['updateid'];
$sql="select * from client where idClient=$idClient";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$firstName=$row['firstName'];
$lastName=$row['lastName'];
$email =  $row['email'];
$identifiant =  $row['identifiant'];
$password =  $row['password'];


if(isset($_POST["submit"])){
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email =  $_POST['email'];
$identifiant =  $_POST['identifiant'];
$password =  $_POST['password'];
$sql="update client set idClient='$idClient',firstName='$firstName',lastName='$lastName',email='$email',identifiant='$identifiant',password='$password' where idClient=$idClient";
$result=mysqli_query($conn,$sql);
if($result){
    header('location:table.php');
}
}
?>
<body>
    <div class="container-fluid position-relative d-flex p-0">
  


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                            </a>
                            <h3>Update ur account</h3>
                        </div>
                        <form method ="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="jhondoe" name="firstName" required value=<?php echo $firstName?>>
                            <label for="floatingText">Nom</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="jhondoe" name="lastName" required value=<?php echo $lastName?>>
                            <label for="floatingText">Prenom</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="jhondoe" name="identifiant" required value=<?php echo $identifiant?>>
                            <label for="floatingText">Identifiant</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required value=<?php echo $email?> >
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required value=<?php echo $password?>>
                            <label for="floatingPassword">Password</label>
                        </div>
               
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                      
                        <button type="submit" name="submit" class="btn btn-primary py-3 w-100 mb-4">Update</button>
                
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>

    <?php include('footer.php'); ?>  
</body>

</html>