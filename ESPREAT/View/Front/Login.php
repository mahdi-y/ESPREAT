
<?php include('header.php'); ?>
<?php include('footer.php'); ?>  



<body>
    <div class="container-fluid position-relative d-flex p-0">
       
        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class=""></a>
                            <h3>Sign In</h3>
                            
                            <?php require_once 'login.inc.php' ; ?>
    <?php if(isset($_SESSION['message'])) : ?>
        <div class="alert alert-<?=$_SESSION['msg_type']?>" >
        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
        </div> 
        <?php endif;?>
                        </div>
                        <form action="login.inc.php" method="post">
                       

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password"required>
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <a href="">Forgot Password</a>
                        </div>
                        <button  type ="submit" name="login"class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                       
                        <p class="text-center mb-0">Don't have an Account? <a href="signup.php">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>
    </div>
   
   

</body>

</html>
