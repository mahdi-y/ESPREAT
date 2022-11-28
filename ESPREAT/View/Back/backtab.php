<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

<?php include('connect.php'); ?>

<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Associations</h6>
                        <a href="backassociation.php">Add association</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">ID</th>
                                    <th scope="col">nom</th>
                                    <th scope="col">numero</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    $query = "Select * from association";
                                    $statement = $conn->prepare($query);
                                    $statement->execute();

                                    $result = $statement->fetchAll(PDO::FETCH_OBJ);
                                    if($result)
                                    {
                                        foreach($result as $row)
                                        {
                                            ?>
                                            
                                            <tr>
                                                <td><?= $row->idA; ?></td>
                                                <td><?= $row->nom; ?></td>
                                                <td><?= $row->numero; ?></td>
                                                
                                                <td>
                                                    <a class="btn btn-sm btn-primary" href="updateassociation.php?idA=<?= $row->idA; ?>" >Update</a>
                                        </td>
                                        <td> 
                                                    <form action="add.php" method="post">
                                                        <button type="submit" name="delete_association" value="<?=$row->idA;?>" class="btn btn-sm btn-primary">Delete </button>
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
                        