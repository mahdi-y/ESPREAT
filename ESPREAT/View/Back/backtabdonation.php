<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

<?php include('connect.php'); ?>

<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">donations</h6>
                        <a href="backdonation.php">Add donation</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                
                                    <th scope="col">id Client</th>
                                    <th scope="col">classe</th>
                                    <th scope="col">sexe</th>
                                    <th scope="col">montant</th>
                                    <th scope="col">anonymat</th>
                                    
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    $query = "Select * from donation";
                                    $statement = $conn->prepare($query);
                                    $statement->execute();

                                    $result = $statement->fetchAll(PDO::FETCH_OBJ);
                                    if($result)
                                    {
                                        foreach($result as $row)
                                        {
                                            ?>
                                            
                                            <tr>
                                                
                                                <td><?= $row->identifiantClient; ?></td>
                                                <td><?= $row->classe; ?></td>
                                                <td><?= $row->gender; ?></td>
                                                <td><?= $row->montant; ?></td>
                                                <td><?= $row->anonymat; ?></td>
                                                
                                                <td>
                                                    <a class="btn btn-sm btn-primary" href="updatedonation.php?idDon=<?= $row->idDon; ?>" >Update</a>
                                        </td>
                                        <td> 
                                                    <form action="adddonation.php" method="post">
                                                        <button type="submit" name="delete_donation" value="<?=$row->idDon;?>" class="btn btn-sm btn-primary">Delete </button>
                                                    </form>
                                                    </td>   
                                                
                                            </tr>
                                            <?php 
                                        }
                                    }

                                    ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->
        
                    <?php include('footer.php'); ?>
                    </body>

</html>
                        