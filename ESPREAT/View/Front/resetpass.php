
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
                            <h3>Reset Password</h3>
                        </div>
                        <form action="passwordcode.php" method="post">
                     


                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
                            <label for="floatingInput">Email address</label>
                        </div>
            
                        <div class="d-flex align-items-center justify-content-between mb-4">
            
                        </div>
                        <button  type ="submit" name="reset"class="btn btn-primary py-3 w-100 mb-4">Send Link</button>
                       
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

   

</body>

</html>
