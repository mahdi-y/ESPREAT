
<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<?php include_once('connect.php'); ?>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        

            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary  rounded h-500 p-25 w-500 " style="width:2000px">
                            <h6 class="mb-5"></h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">password</th>
                                        <th scope="col">Identifiant</th>
                                        <th scope="col">delete</th>




                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "Select * from client ";
                                    $result=mysqli_query($conn,$sql);
                                    if($result){
                                        while($row=mysqli_fetch_assoc($result)){
                                            $idClient=$row['idClient'];
                                            $firstName=$row['firstName'];
                                            $lastName=$row['lastName'];
                                            $email=$row['email'];
                                            $password=$row['password'];
                                            
                                            $identifiant=$row['identifiant'];
                                            echo'  <tr>
                                            <th scope="row">'.$idClient.'</th>
                                            <td>'.$firstName.'</td>
                                            <td>'.$lastName.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.password_hash($password,PASSWORD_BCRYPT).'</td>
                                            <td>'.$identifiant.'</td>
                                            
    
                                            <td> <button class = "btn btn-danger"><a href="delete.php?deleteid='.$idClient.'"class="text-light">Delete</a></button>
                                             </td>
                                            </tr>';
                                            
                                        }

                                    }

                                    ?>
                            
                                    
                                </tbody>
                            </table>
                       
                           
            <!-- Table End -->


 
            <?php include('footer.php'); ?>  
</body>

</html>