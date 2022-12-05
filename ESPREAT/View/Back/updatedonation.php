<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<?php include('functions.php'); ?>
<?php include('connect.php'); ?>


<!-- Recent Sales Start -->
<div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                            </a>
                            <h3>update donation</h3>
                        </div>
                        <?php
                        if(isset($_GET['idDon']))
                        {
                            $donation_idDon = $_GET['idDon'];

                            $query = "SELECT * FROM donation WHERE idDon=:dona_idDon LIMIT 1";
                            $statement = $conn->prepare($query);
                            $data = [':dona_idDon' =>$donation_idDon];
                            $statement->execute($data);
                            $result = $statement->fetch(PDO::FETCH_OBJ);
                            

                        }
                        ?>
                        <form action="adddonation.php" method ="post">
                            <input type="hidden" class="" name="donation_idDon" value="<?= $result->idDon; ?>"> 
                        <div class="form-floating mb-3">
                        
                            <input type="number" class="form-control" value="<?= $result->identifiantClient; ?>" id="floatingText" placeholder="jhondoe" name="identifiantClient">
                            <label for="floatingText">identifiantClient</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" value="<?= $result->classe; ?>" id="floatingText" placeholder="jhondoe" name="classe">
                            <label for="floatingText">classe</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" value="<?= $result->gender; ?>" id="floatingText" placeholder="jhondoe" name="gender">
                            <label for="floatingText">gender</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" value="<?= $result->montant; ?>" id="floatingText" placeholder="jhondoe" name="montant">
                            <label for="floatingText">montant</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" value="<?= $result->anonymat; ?>" id="floatingText" placeholder="jhondoe" name="anonymat">
                            <label for="floatingText">anonymat</label>
                        </div>
                       
                        
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                       
                        <button type="floatingText" name="update_donation_btn" class="btn btn-primary py-3 w-100 mb-4">update donation</button>
                        
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
                        