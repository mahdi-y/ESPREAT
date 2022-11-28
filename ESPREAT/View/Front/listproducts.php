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

$query = "SELECT * FROM product" ;
$statement = $conn->prepare($query);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_OBJ);
$result = $statement->fetchAll();
if($result)
{
  
foreach($result as $row)
{

?>


<div class="tab-content" id="pills-tabContent">
<div
  class="tab-pane fade show active"
  id="foods"
  role="tabpanel"
  aria-labelledby="pills-home-tab">

  <div class="row justify-content-center">
        <div class="column">
  
  
      <div class="card bg-transparent border my-3 my-md-0">

      <div class="container">


     <img height="300" width="345" src="../Back/img/<?=$row->image;?> " alt=""
     class="rounded-0 card-img-top mg-responsive">
      
        <div class="card-body">
         <h1 class="text-center mb-4">
            <a href="#" class="badge badge-primary"><?=$row->price;?> DT</a>
          </h1>
          <h4 class="pt20 pb20"><?=$row->nameP;?></h4>
      <p class="text-white">
          <?=$row->description;?>
          </p>
         
          
        </div>
      </div>
    </div>
    </div>
   
  
          


                                
       
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br> 


            <?php
}
}
else
{

?>
<tr>
<td colspan="4"->No Record Found></td>
</tr> 
<?php

}

?>
<?php
include 'footer.php';
?>