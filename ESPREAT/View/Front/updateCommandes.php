<?php include('connect.php'); 

$idCommande=$_GET['updateidCommande'];

if(isset($_POST['update'])){
    $bloc=$_POST['bloc'];
    $idClient=$_POST['idClient'];
  
    $sql="update `commandes` set idCommande=$idCommande,bloc='$bloc',idClient='$idClient'
    where idCommande=$idCommande";
    $result=mysqli_query($con,$sql);
    if($result){
      //echo "updated successfully";
      header('location:listCommandes.php');
    }else{
      die(mysqli_error($con)); 
    }
  }



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="/ESPREAT/View/Front/assets/css/cart.css?v=1">
    <link rel="stylesheet" href="/ESPREAT/View/Front/assets/css/foodhut.css?v=2">
    <title>Menu</title>
  </head>
<body>
    <main class="main-cart">
        <div class="header-cart">
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
                  <a class="nav-link" href="#gallary">Gallary</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#book-table">Collection Point</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="commander.html">Order</a>
                </li>
              </ul>
              <a class="navbar-brand m-auto" href="#">
                <img src="assets/imgs/logo.png" class="brand-img" alt="" />
                <span class="brand-txt">ESPREAT</span>
              </a>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="javascript:openNav();"
                    >Cart<span class="sr-only">(current)</span></a
                  >
                </li>
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
        </div>
        <div>
        <form
        method="post"
        onsubmit="return confirmOrder(), false"
      >
        <span class="textarea"
          ><p class="checkout-text" id="checkout-p"></p
        ></span>
        <div class="label-div">
          <label class="input-label-name" style="color: crimson ;">Identifiant</label>
        </div>
        <input type="text" class="text-input" required name="idClient" style="width: 200px;"/>
        <div class="label-div">
          <label class="input-label-phone" style="color: crimson ;">Bloc</label>
        </div>
        <input
        style="width: 200px;"
          id="adress-input"
          type="tel"
          class="tel-input"
          pattern="[A-M]{,1}"
          required
          name="bloc"
        />
        <button type="submit"
          value="update"
          
          style="width: 200px; color: #ff214f;"
          name="update">

          
          Update</button>
      </form>
      <span class="confirm-span"><p class="confirm-p" id="confirm-p"></p></span>
    </div>
</div>
</body>