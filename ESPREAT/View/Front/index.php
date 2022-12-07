<?php
include '../../config.php';
include ('header.php');
include('insert_cart.php');
?>

<?php include('navbar.php'); ?>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <!-- header -->
    <header id="home" class="header">
      <div class="overlay text-white text-center">
        <h1 class="display-2 font-weight-bold my-3">
          ESPR<span style="color: #ed1f24">E</span>AT
        </h1>
        <h2 class="display-4 mb-5">Manger Autrement</h2>
        <a class="btn btn-lg btn-primary" href="#gallary">View Our gallary</a>
      </div>
    </header>
    
  <!--<p>Translate this page in your preferred language:</p>-->
<div id="google_translate_element"></div> 
    <script type="text/javascript"> 
    function googleTranslateElementInit() { 
      new google.translate.TranslateElement({pageLanguage: 'fr'},'google_translate_element'); 
    } 
    </script> 
    <script type="text/javascript"src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 
   <!--   <p>Vous pouvez traduire le contenu de cette page en sélectionnant une langue dans le menu déroulant.</p>-->

    <!--  About Section  -->
    <div
      id="about"
      class="container-fluid wow fadeIn"
      id="about"
      data-wow-duration="1.5s"
    >
      <div class="row">
        <div class="col-lg-6 has-img-bg"></div>
        <div class="col-lg-6">
          <div class="row justify-content-center">
            <div class="col-sm-8 py-5 my-5">
              <h2 class="mb-4">ABOUT US</h2>
              <p>
                On a remarqué que notre école présente des problèmes majeurs au
                niveau de cet sujet. <br /><br />
                Et avec le taux d'admissions qui ne cesse de croitre les
                problèmes ne font qu'empirer. <br /><br />
                Les buvettes sont à la base conçues pour hébérger une centaines
                de personne au maximum les voilà submergées par des miliers
                d'étudiants chaque pause. <br /><br />
                A prendre en compte aussi que cette complication s'amplifie
                l'hiver puisque la majorité des étudiants sont à l'intérieur.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--  gallary Section  -->
    <div
      id="gallary"
      class="text-center bg-dark text-light has-height-md middle-items wow fadeIn"
    >
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
      <form action="" method="post" class="box" autocomplete="off"> 
          

     <img height="225" width="150" src="../Back/img/<?=$row->image;?> " alt=""
     class="rounded-0 card-img-top mg-responsive">
      
        <div class="card-body">
        
          <h3 class="pt20 pb20"><?=$row->nameP;?></h3>

          <h4 class="pt20 pb20"><?=$row->price;?> DT</h4>

      <p class="text-white">
          <?=$row->description;?>
          </p>
         
          <input type="submit" value="Add to cart" class="btn btn-primary" name="add_to_cart"
      style="margin-top: 10px; margin-bottom: 25px; width: 150px;">
          </form>
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


     <img height="225" width="150" src="../Back/img/<?=$row->image;?> " alt=""
     class="rounded-0 card-img-top mg-responsive">
      
        <div class="card-body">
        
          <h3 class="pt20 pb20"><?=$row->nameP;?></h3>

          <h4 class="pt20 pb20"><?=$row->price;?> DT</h4>

      <p class="text-white">
          <?=$row->description;?>
          </p>
          
          
          <input type="submit" value="Add to cart" class="btn btn-primary" name="add_to_cart"
      style="margin-top: 10px; margin-bottom: 25px; width: 150px;">
          
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

    <!-- book a table Section  -->
    

    <!-- BLOG Section  -->
    

    <!-- REVIEWS Section  -->
    <div
      id="testmonial"
      class="container-fluid wow fadeIn bg-dark text-light has-height-lg middle-items"
    >
      <h2 class="section-title my-5 text-center">REVIEWS</h2>
      <div class="row mt-3 mb-5">
        <div class="col-md-4 my-3 my-md-0">
          <div class="testmonial-card">
            <h3 class="testmonial-title">Iheb Souissi</h3>
            <h6 class="testmonial-subtitle">Étudiant</h6>
            <div class="testmonial-body">
              <p>Time and energy saving project, kudos to the creators</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 my-3 my-md-0">
          <div class="testmonial-card">
            <h3 class="testmonial-title">Mahdi Zalila</h3>
            <h6 class="testmonial-subtitle">Enseignant</h6>
            <div class="testmonial-body">
              <p>
                Can't believe how organized and well made this interface is.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 my-3 my-md-0">
          <div class="testmonial-card">
            <h3 class="testmonial-title">Amen Allah Laouini</h3>
            <h6 class="testmonial-subtitle">Étudiant</h6>
            <div class="testmonial-body">
              <p>Simple, fast and clean. This is a big step for our school.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- CONTACT Section  -->
    <div
      id="contact"
      class="container-fluid bg-dark text-light border-top wow fadeIn"
    >
      <div class="row">
        <div class="col-md-6 px-0">
          <div
            id="map"
            style="width: 100%; height: 100%; min-height: 400px"
          ></div>
        </div>
        <div class="col-md-6 px-5 has-height-lg middle-items">
          <h3>FIND US</h3>
          <p>
            Come check out our headquarters and take a look on how we manage to
            keep the logistics going!
          </p>
          <div class="text-muted">
            <p>
              <span class="ti-location-pin pr-3"></span> 2083 Cebalat Ben Ammar
              ST Fethi Zouhir, Tunis
            </p>
            <p><span class="ti-support pr-3"></span> (216) 70-255-255</p>
            <p><span class="ti-email pr-3"></span>contact@espreat.tn</p>
          </div>
        </div>
      </div>
    </div>


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
