<?php
include '../../config.php';

include 'connect.php';
?>

<?php
session_start();
include ('connect.php');
if(!isset($_SESSION["identifiant"])){
    header("location:login.php");
}

$user_id = $_SESSION['identifiant'];


include 'header.php';
include('navbar-logout.php');
include('insert_cart.php'); 
?>
    
    
  <!--<p>Translate this page in your preferred language:</p>-->
<div id="google_translate_element"></div> 
    <script type="text/javascript"> 
    function googleTranslateElementInit() { 
      new google.translate.TranslateElement({pageLanguage: 'fr'},'google_translate_element'); 
    } 
    </script> 
    <script type="text/javascript"src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 
   <!--   <p>Vous pouvez traduire le contenu de cette page en sélectionnant une langue dans le menu déroulant.</p>-->


    <div id="blog" class="container-fluid bg-dark text-light py-5 text-center wow fadeIn">
      <h2 class="section-title py-5">OUR MENU</h2>
</div>
    




<!-- Brand List  -->
                <form action="" method="GET">
                  
                    <div class="card bg-transparent mt-3" style="margin-top: 0px;">
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
  <button type ="submit" class="btn btn-primary" >Filter</button>
  </div>
  </div>
  </div>
                </form>
           
</div> 
<section class="" style="margin-left: 45px;">
   
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
<form action="" method="post" autocomplete="off">
<div class="subx-box" style="float: left; margin-right: 30px; overflow: hidden; border: 2px solid #575a5e; padding: 16px; background-color: #575a5e; border-radius: 10px; margin-top: 25px; text-align:center;">
      <input type="hidden" name="pid" value="<?=$row->idP;?>">
      <input type="hidden" name="name" value="<?=$row->nameP;?>">
      <input type="hidden" name="price" value="<?=$row->price;?>">
      <input type="hidden" name="image" value="<?=$row->image;?>">
      <input type="hidden" name="description" value="<?=$row->description;?>">
        
      
      <img height="225" width="250" src="../Back/img/<?=$row->image;?> " alt="">
      
          <div class=""><?=$row->nameP;?></div>

          <div class=""><?=$row->price;?> DT</div>

      <div class="text-white">
          <?=$row->description;?>
          </div>
          <div>
          <input style=" text-align: center;border-color: #6c757d; width: fit-content; margin-top: 25px; margin-left: 40px;" type="number" name="quantity" class="form-control form-control-lg custom-form-control col-md-5 " min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
          </div>
          <input type="submit" value="Add to cart" class="btn btn-primary" name="add_to_cart"
          style="margin-top: 10px; margin-bottom: 25px; width: 150px;">
        </div>
</form>
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
</div>
</section>  


<section class="" style="margin-left: 0px;">

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
<div class="subx-box" style="float: left; margin-right: 30px; overflow: hidden; border: 2px solid #575a5e; padding: 16px; background-color: #575a5e; border-radius: 10px; margin-top: 20px; text-align:center;">
<form action="" method="post" autocomplete="off">
      <input type="hidden" name="pid" value="<?=$row->idP;?>">
      <input type="hidden" name="name" value="<?=$row->nameP;?>">
      <input type="hidden" name="price" value="<?=$row->price;?>">
      <input type="hidden" name="image" value="<?=$row->image;?>">
      <input type="hidden" name="description" value="<?=$row->description;?>">
      <div>
      <img height="200" width="250" src="../Back/img/<?=$row->image;?> " alt=""
      class="">
      </div>
        
          <div class=""><?=$row->nameP;?></div>

          <div class=""><?=$row->price;?> DT</div>
      <div>
      <p class="text-white">
          <?=$row->description;?>
          </p>
          </div>
          <div>
          <input style=" text-align: center;border-color: #6c757d; width: fit-content; margin-top: 25px; margin: auto;" type="number" name="quantity" class="form-control form-control-lg custom-form-control col-md-5 " min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
          </div>
          <input type="submit" value="Add to cart" class="btn btn-primary" name="add_to_cart"
          style="margin-top: 10px; margin-bottom: 25px; width: 150px;">
          
        </div>
</form>
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
</section>
<?php
}
}
?>
    <!-- page footer  -->
    <div
      class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn"
    >
      <div class="row">
        <div class="col-sm-4">
          <h3>EMAIL US</h3>
          <p class="text-muted">contact@espreat.tn</p>
        </div>
        <div class="col-sm-4">
          <h3>CALL US</h3>
          <p class="text-muted">(216) 70-255-255</p>
        </div>
        <div class="col-sm-4">
          <h3>FIND US</h3>
          <p class="text-muted">
            2083 Cebalat Ben Ammar ST Fethi Zouhir, Tunis
          </p>
        </div>
      </div>
    </div>
    <!-- end of page footer -->

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- wow.js -->
    <script src="assets/vendors/wow/wow.js"></script>

    <!-- google maps -->
    <script
      async
      defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"
    ></script>

    <!-- FoodHut js -->
    <script src="assets/js/commander.js"></script>
  </body>
</html>

