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
                                    <th scope="col">motant</th>
                                    <th scope="col">anonymat</th>
                                    
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    $sql = "Select * from donation ";
                                    $result=mysqli_query($conn,$sql);
                                    if($result){
                                        while($row=mysqli_fetch_donat($result)){
                                            
                                            $idClient=$row['idClient'];
                                            $classe=$row['classe'];
                                            $gender=$row['gender'];
                                            $montant=$row['montant'];
                                            $anonymat=$row['anonymat'];
                                            echo'  <tr>
                                            
                                            <td>'.$idClient.'</td>
                                            <td>'.$classe.'</td>
                                            <td>'.$gender.'</td>
                                            <td>'.$montant.'</td>
                                            <td>'.$anonymat.'</td>
                                            
                                        <td><a class="btn btn-sm btn-primary" href="">Update</a> </td>
                                        <td> <a class="btn btn-sm btn-primary" href="deletedonation.php?deleteid='.$idClient.'">Delete</a></td>
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
                        