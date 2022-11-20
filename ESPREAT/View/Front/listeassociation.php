
<?php include('../Back/header.php'); ?>


<?php include('../Back/connect.php'); ?>

<!-- Recent Sales Start -->
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
                                            
                                            $numero=$row['numero'];
                                            $nom=$row['nom'];
                                            $idA=$row['idA'];
                                            echo'  <tr>
                                            
                                            <td>'.$nom.'</td>
                                            <td>'.$numero.'</td>
                                            
                                        
                                            </tr>';

                                        }
                                    }
                                    

                                    ?>
                                
                            </tbody>
                        </table>
                    </div>
            <!-- Recent Sales End -->
        
                    
                    </body>

</html>
                        