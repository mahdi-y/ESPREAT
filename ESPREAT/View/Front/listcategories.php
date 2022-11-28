

<?php
include '../../config.php';
include 'header.php';
?>

    <div
      id="blog"
      class="container-fluid bg-dark text-light py-5 text-center wow fadeIn"
    >
      <h2 class="section-title py-5">OUR MENU</h2>

      <?php

$query = "SELECT * FROM category" ;
$statement = $conn->prepare($query);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_OBJ);
$result = $statement->fetchAll();
if($result)
{
foreach($result as $row)
{

?>



      <div class="row justify-content-center">
        <div class="col-sm-7 col-md-4 mb-5">
          
          <ul
            class="nav nav-pills nav-justified mb-3"
            
            id="pills-tab"
            role="tablist"
            
          >
            <li class="nav-item">
              <a
                class="nav-link active"
                id="pills-home-tab"
                data-toggle="pill"
                href="listproducts.php"
                role="tab"
                aria-controls="pills-home"
                aria-selected="true"
                ><?=$row->nameC;?></a
              >
            </li>
            
          </ul>
        </div>
      </div>
      

      <?php
}
}
else
{

  ?>
  <tr>
    <td colspan="2"->No Record Found></td>
</tr> 
  <?php

}

?>
<?php
include 'footer.php';
?>



     
      
     
        
        
        
        
        
        
        
        
        
        
        
        
        
        
       
   