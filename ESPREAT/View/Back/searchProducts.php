<?php


include '../../config.php';


// Create connection
$query = "SELECT * FROM product WHERE nameP LIKE '%".$_POST['nameP']."%'";

$statement = $conn->prepare($query);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_OBJ);
$result = $statement->fetchAll();
if($result)
{
foreach($result as $row)
{
  ?>
 <tr>
    <td><?=$row->nameP;?></td>
    <td><?=$row->price;?></td>
    <td><?=$row->quantity;?></td>
    <td><?=$row->image;?></td>
    <td><?=$row->description;?></td>
    <td><?=$row->fkC;?></td>
    <td><a class="btn btn-sm btn-primary" href="updateproduct.php?updateid=<?=$row->idP;?>">Update</a>
        <a class="btn btn-sm btn-primary" href="deleteproduct.php?deleteid=<?=$row->idP;?>">Delete</a></td>
    </tr> 
  <?php
}
}

else
{

  ?>
  <tr>
    <td colspan="7"->No Record Found></td>
</tr> 
  <?php

}



//fetch.php

/*
$output = '';

$query = '';

if(isset($_POST["query"]))
{
 $search = str_replace(",", "|", $_POST["query"]);
 $query = "
 SELECT * FROM product 
 WHERE nameP REGEXP '".$search."' 
 OR price REGEXP '".$search."' 
 OR quantity REGEXP '".$search."' 
 ";
}
else
{
 $query = "
 SELECT * FROM product ORDER BY idP
 ";
}

$statement = $conn->prepare($query);
$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
 $data[] = $row;
}

echo json_encode($data);

*/
?>