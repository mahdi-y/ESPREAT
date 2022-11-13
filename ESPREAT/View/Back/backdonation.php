<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Donations</h6>
                        <a href="addproduct.php">Add donation</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">idClient</th>
                                    <th scope="col">classe</th>
                                    <th scope="col">gender</th>
                                    <th scope="col">montant TND</th>
                                    <th scope="col">idDon</th>
                                    <th scope="col">anonymat</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>1454785</td>
                                    <td>2A2</td>
                                    <td>0</td>
                                    <td>55</td>
                                    <td>552457</td>
                                    <td>0</td>
                            
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
                        