<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

<?php include('connect.php'); ?>

<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Donations</h6>
                        <a href="backassociation.php">Add association</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    
                                    <th scope="col">nom</th>
                                    <th scope="col">numero</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    $sql = "Select * from association ";
                                    $result=mysqli_query($conn,$sql);
                                    if($result){
                                        while($row=mysqli_fetch_assoc($result)){
                                            $idA=$row['idA'];
                                            $numero=$row['numero'];
                                            $nom=$row['nom'];
                                            echo'  <tr>
                                            <th scope="row">'.$idA.'</th>
                                            <td>'.$nom.'</td>
                                            <td>'.$numero.'</td>
                                        <td><a class="btn btn-sm btn-primary" href="">Update</a> </td>
                                        <td> <a class="btn btn-sm btn-primary" href="delete.php?deleteid='.$idA.'">Delete</a></td>
                                            </tr>';

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