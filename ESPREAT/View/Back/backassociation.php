<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Association</h6>
                        <a href="addproduct.php">Add association</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Numero</th>
                                    <th scope="col">Adresse</th>
                                    <th scope="col">President</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>Croissant rouge</td>
                                    <td>29 203 573</td>
                                    <td>20 , rue d'afrique , charguia 5</td>
                                    <td>Iheb Souissi</td>
                            
                                    <td><a class="btn btn-sm btn-primary" href="productupdate.php?id=<?=$c ['idP'];?>">Update</a></td>
                                    <td><a class="btn btn-sm btn-primary" href="">Delete</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->
        
                    <?php include('footer.php'); ?>
                    </body>

</html>
                        