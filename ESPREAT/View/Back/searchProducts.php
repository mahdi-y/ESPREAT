<?php


include 'C:\xampp\htdocs\espreat\ESPREAT\ESPREAT\connect.php';


// Create connection
$sql = "SELECT * FROM product WHERE nameP LIKE '%".$_POST['nameP']."%'";

$result1 = mysqli_query($con, $sql);
if(mysqli_num_rows($result1)>0){
	while ($row=mysqli_fetch_assoc($result1)) {
        $idP=$row['idP'];
        $nameP=$row['nameP'];
        $price=$row['price'];
        $quantity=$row['quantity'];
        $image=$row['image'];
        $description=$row['description'];
        $fkC=$row['fkC'];

		echo'<tr>
                                 
        <td>'.$nameP.'</td>
        <td>'.$price.' DT</td>
        <td>'.$quantity.'</td>
        <td><img height="80" width="80" src="img/'.$image.' " alt=""> </td> 
        <td>'.$description.'</td>
        <td>'.$fkC.'</td>

        <td><a class="btn btn-sm btn-primary" href="updateproduct.php?updateid='.$idP.'">Update</a>
        <a class="btn btn-sm btn-primary" href="deleteproduct.php?deleteid='.$idP.'">Delete</a></td>
    </tr>';
	}
}
else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>