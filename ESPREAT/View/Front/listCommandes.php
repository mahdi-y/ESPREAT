<?php include('connect.php'); ?>
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
        <div class="container">
          <p style="margin-top: 250px; font-size: 40px; color: crimson;   " >On-going Orders</p>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col" style="width: 5%; text-align: center;">#</th>
                <th scope="col" style="width: 10%; text-align: center;">Bloc</th>
                <th scope="col" style="width: 10%; text-align: center;">IdClient</th>
                <th scope="col" style="width: 10%; text-align: center;">Operation</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $sql="Select * from `commandes`";
                $result=mysqli_query($con,$sql);
                if($result){              
                  while($row=mysqli_fetch_assoc($result)){
                    $idCommande=$row['idCommande'];
                    $bloc=$row['bloc'];
                    $idClient=$row['idClient'];
                    echo '<tr>
                    <th scope="row">'.$idCommande.'</th>
                    <td style="width: 10%; text-align: center;">'.$bloc.'</td>
                    <td style="width: 10%; text-align: center;">'.$idClient.'</td>
                    <td style="width: 10%; text-align: center;">
                    <button class="btn btn-success ml-xl-4"><a href="updateCommandes.php?
                    updateidCommande='.$idCommande.'"
                    class="text-white">Update</a></button>
                    <button class="btn btn-danger ml-xl-4"><a href="deleteCommandes.php?
                    deleteidCommande='.$idCommande.'"
                    class="text-white">Delete</a></button>
                    </td>
                  </tr>';
                  }
                }
              
              ?>
             
            </tbody>
          </table>
        </div>
</body>
</html>