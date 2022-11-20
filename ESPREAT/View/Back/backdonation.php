<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<?php include('functions.php'); ?>


<!-- Recent Sales Start -->
<div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                            </a>
                            <h3>add donation</h3>
                        </div>
                        <form action="adddonation.php" method ="post">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingText" placeholder="jhondoe" name="idClient">
                            <label for="floatingText">idClient</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="jhondoe" name="classe">
                            <label for="floatingText">classe</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="jhondoe" name="gender">
                            <label for="floatingText">sexe</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingText" placeholder="jhondoe" name="montant">
                            <label for="floatingText">montant</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingText" placeholder="(0:oui , 1:non)" name="anonymat">
                            <label for="floatingText">anonymat</label>
                        </div>
                        
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                       
                        <button type="submit" name="submit" class="btn btn-primary py-3 w-100 mb-4">add donation</button>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>

            <!-- Recent Sales End -->
        
                    <?php include('footer.php'); ?>
                    </body>

</html>
                        