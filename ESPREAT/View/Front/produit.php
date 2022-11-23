

<?php
include 'C:\xampp\htdocs\espreat\ESPREAT\ESPREAT\connect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="description"
      content="Start your development with FoodHut landing page."
    />
    <meta name="author" content="Devcrud" />
    <title>ESPREAT</title>

    <!-- font icons -->
    <link
      rel="stylesheet"
      href="assets/vendors/themify-icons/css/themify-icons.css"
    />

    <link rel="stylesheet" href="assets/vendors/animate/animate.css" />

    <!-- Bootstrap + FoodHut main styles -->
    <link rel="stylesheet" href="assets/css/foodhut.css" />
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <!-- Navbar -->
    <nav
      class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top"
      data-spy="affix"
      data-offset-top="10"
    >
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallary">Gallary</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#book-table">Collection Point</a>
          </li>
        </ul>
        <a class="navbar-brand m-auto" href="#">
          <img src="assets/imgs/logo.png" class="brand-img" alt="" />
          <span class="brand-txt">ESPREAT</span>
        </a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#blog"
              >Hits<span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#testmonial">Reviews</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact Us</a>
          </li>
          <li class="nav-item">
            <a
              href="/ESPREAT/View/Back/index.html"
              class="btn btn-primary ml-xl-4"
              >Login</a
            >
          </li>
        </ul>
      </div>
    </nav>
    <!-- header -->
    <header id="home" class="header">
      <div class="overlay text-white text-center">
        <h1 class="display-2 font-weight-bold my-3">
          ESPR<span style="color: #ed1f24">E</span>AT
        </h1>
        <h2 class="display-4 mb-5">Manger Autrement</h2>
        
      </div>
    </header>
    <div
      id="blog"
      class="container-fluid bg-dark text-light py-5 text-center wow fadeIn"
    >
      <h2 class="section-title py-5">OUR MENU</h2>
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
                href="#foods"
                role="tab"
                aria-controls="pills-home"
                aria-selected="true"
                >Foods</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                id="pills-profile-tab"
                data-toggle="pill"
                href="#juices"
                role="tab"
                aria-controls="pills-profile"
                aria-selected="false"
                >Drinks</a
              >
            </li>
          </ul>
        </div>
      </div>


     
      
      <?php
$sql="select * from `product`";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $idP=$row['idP'];
        $nameP=$row['nameP'];
        $price=$row['price'];
        $quantity=$row['quantity'];
        $image=$row['image'];
        $description=$row['description'];
        $fkC=$row['fkC'];
        echo'
        
        
        <div class="tab-content" id="pills-tabContent">
        <div
          class="tab-pane fade show active"
          id="foods"
          role="tabpanel"
          aria-labelledby="pills-home-tab">

          <div class="row">
          
          
              <div class="card bg-transparent border my-3 my-md-0">

              <div class="container">
        

             <img height="300" width="345" src="../Back/img/'.$image.' " alt=""
             class="rounded-0 card-img-top mg-responsive">
              
                <div class="card-body">
                 <h1 class="text-center mb-4">
                    <a href="#" class="badge badge-primary">'.$price.' DT</a>
                  </h1>
                  <h4 class="pt20 pb20">'.$nameP.'</h4>
              <p class="text-white">
                  '.$description.'
                  </p>
                  
                </div>
              </div>
            </div>'; 
          
          } 
        }
                  ?>
        
        
                                        
               
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
       
   