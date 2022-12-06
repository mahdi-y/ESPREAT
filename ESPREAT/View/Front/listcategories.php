

<?php
include '../../config.php';
include 'header.php';
?>



    <div id="blog" class="container-fluid bg-dark text-light py-5 text-center wow fadeIn">
      <h2 class="section-title py-5">OUR MENU</h2>
</div>
    
      <div class="container">
        <div class="row">



<!-- Brand List  -->
<div class="col-md-4">
                <form action="" method="GET">
                  
                    <div class="card bg-transparent mt-3">
                        <div class="card-header">
                            <h5>Select a category 
                              
                                <button type="submit" class="btn btn-primary btn-sm float-end">Select</button>

                            </h5>
                        </div>
                        <div class="card-body">
                            <h6>Category list</h6>
                            <hr>

                            


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
 
  $checked = [];
  if(isset($_GET['fkC']))
  {
    $checked = $_GET['fkC'];
  }

?>


<div>


        <input type ="checkbox"  name="fkC[]" value = "<?=$row->idC;?>" 

           <?php if(in_array ($row->idC,(array)$checked)) 
          {echo "checked";}?>
          />

<?=$row->nameC;?> 
</div>


       
      <?php
}
}
else
{

  ?>
  <tr>
    <td colspan="2"->No Product Found for </td>
</tr> 

  <?php

}

?>

</div>

                    </div>
                    <br>
                    <div class="row">
                    <div class="col-md-10">
                      <div class="input-group mb-3">
                        <select name="sort_numeric" class="form-control" >
                          <option value="">Select Option</option>
                          <option value="low-high"<?php if (isset($_GET['sort_numeric']) && $_GET ['sort_numeric']=="low-high" ) {echo "selected";}?>>Low - High</option>
                          <option value="high-low"<?php if (isset($_GET['sort_numeric']) && $_GET ['sort_numeric']=="high-low" ) {echo "selected";}?>>High - Low</option>
  </select>
  <button type ="submit" class="btn btn-primary btn-sm float-end" >Filter</
  </button>
  </div>
  </div>
  </div>
                </form>
           
</div>



<div
      id="blog"
      class="container-fluid bg-dark text-light py-5 text-center wow fadeIn"
    >
    
      
<?php

if(isset($_GET['fkC']))
{
  $checked = [];
  $checked =$_GET['fkC'];

  foreach((array)$checked as $row)
  {
    $query = "SELECT * FROM product WHERE fkC IN ($row)" ;
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
<td colspan="4"-> No product found</td>
</tr> 

<?php

}

  }
}

else
{
  $sort_option = "";
  if (isset($_GET['sort_numeric']))
  {
    if ($_GET['sort_numeric'] == "low-high") 
    {$sort_option = "ASC";}
    elseif($_GET['sort_numeric'] == "high-low")  {
      $sort_option = "DESC"; }
  }
$query = "SELECT * FROM product ORDER BY product.price $sort_option" ;
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
}
?>





<?php
include 'footer.php';
?>
