<?php


include 'connect.php';


$sql = "SELECT * FROM `panier` WHERE idProduit LIKE '%".$_POST['idProduit']."%'";

$result1 = mysqli_query($con, $sql);
if(mysqli_num_rows($result1)>0){
	while ($row=mysqli_fetch_assoc($result1)) {
        $idProduit=$row['idProduit'];
        $ipAddress=$row['ipAddress'];
        $quantity=$row['quantity'];

		echo'<tr>
                                 
        <td>'.$idProduit.'</td>
        <td>'.$ipAddress.' DT</td>
        <td>'.$quantity.'</td>

        <td><a class="btn btn-sm btn-primary" href="updateproduct.php?updateid='.$idProduit.'">Update</a>
        <a class="btn btn-sm btn-primary" href="deleteproduct.php?deleteid='.$idProduit.'">Delete</a></td>
    </tr>';
	}
}
else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>