
<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<?php
	include 'C:\xampp\htdocs\web\ESPREAT\ESPREAT\Controller\clientC.php';
	$clientC=new ClientC();
    $idClient=$_GET[$idClient];
	$listClients=$clientC->showClient($idClient);

?>
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
                                        <th scope="col">identifiant</th>
                                        <th scope="col">password</th>
                                        <th scope="col">delete</th>
                                    </tr>
                                    <?php
				foreach($listClients as $client){
                    
			                         ?>
                                <tr>
				                <td><?php echo $client['idClient']; ?></td>
				                <td><?php echo $client['firstName']; ?></td>
				                <td><?php echo $client['lastName']; ?></td>
				                <td><?php echo $client['email']; ?></td>
                                <td><?php echo $client['identifiant']; ?></td>
				                <td><?php echo $client['password']; ?></td>
				
               
                                <td>
                                <button class = "btn btn-danger">
					<a href="deleteC.php?idClient=<?php echo $client['idClient']; ?>">Delete</a>
                    </button>
				</td>
                </tr>


                <?php
				}
			?>      
                            
                                    
                            </table>
                        
                           
            <!-- Table End -->


 
            <?php include('footer.php'); ?>  
</body>

</html>