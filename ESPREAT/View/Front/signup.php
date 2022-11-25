
<?php include('header.php'); ?>
<?php include('footer.php'); ?>  



        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                            </a>
                            <h3>Sign Up</h3>
                            
<?php require_once 'signup.inc1.php'; ?>

<?php if(isset($_SESSION['message'])) : ?>
    <div class="alert alert-<?=$_SESSION['msg_type']?>" >
    <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    ?>
    </div> 
    <?php endif;?>

  

                            
                          
                        </div>
                        <form action="signup.inc1.php" method ="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="jhondoe" name="firstName"required>
                            <label for="floatingText">Nom</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="jhondoe" name="lastName"required>
                            <label for="floatingText">Prenom</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="jhondoe" name="identifiant" required>
                            <label for="floatingText">Identifiant</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@esprit.tn" pattern=".+@esprit.tn" name="email"  required >
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="resetpass.php">Forgot Password</a>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                        <p class="text-center mb-0">Already have an Account? <a href="login.php">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>
    

    <?php include('footer.php'); ?>  
</body>

</html>