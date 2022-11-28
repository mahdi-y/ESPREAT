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
                            <h3>update association</h3>
                        </div>
                        <?php
                        if(isset($_GET['idA']))
                        {
                            $association_id = $_GET['idA'];

                            $query = "SELECT * FROM association WHERE idA=:asso_idA LIMIT 1";
                            $statement = $conn->prepare($query);
                            $data = [':asso_idA' =>$association_id];
                            $statement->execute($data);
                            $result = $statement->fetch(PDO::FETCH_OBJ);
                            

                        }
                        ?>
                        <form action="add.php" method ="post">
                            <input type="hidden" class="" name="association_idA" value="<?= $result->idA; ?>"> 
                        <div class="form-floating mb-3">
                        
                            <input type="text" class="form-control" value="<?= $result->nom; ?>" id="floatingText" placeholder="jhondoe" name="nom">
                            <label for="floatingText">nom</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" value="<?= $result->numero; ?>" id="floatingText" placeholder="jhondoe" name="numero">
                            <label for="floatingText">numero</label>
                        </div>
                        
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                       
                        <button type="floatingText" name="update_student_btn" class="btn btn-primary py-3 w-100 mb-4">update association</button>
                        
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
                        