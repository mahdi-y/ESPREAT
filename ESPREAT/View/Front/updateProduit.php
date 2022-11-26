<?php include('connect.php'); ?>
<?php include('header.php'); ?>
<?php

$idProduit=$_GET['updateidProduit'];

if(isset($_POST['update'])){
    $ipAddress=$_POST['ipAddress'];
    $quantity=$_POST['quantity'];

    $sql="update `panier` set idProduit=$idProduit,ipAddress='$ipAddress',quantity='$quantity' where idProduit=$idProduit";
    $result=mysqli_query($con,$sql);
    if($result){
      //echo "updated successfully";
      header('location:cart.php');
    }else{
      die(mysqli_error($con)); 
    }
  }

  ?>
<body>
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
      <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" id="search" placeholder="Search">
                </form>
      <div class="container">
          <p style="margin-top: 250px; font-size: 40px; color: crimson;   " >Cart Items</p>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col" style="width: 5%; text-align: center;"></th>
                <th scope="col" style="width: 10%; text-align: center;">id_Produit</th>
                <th scope="col" style="width: 10%; text-align: center;">id_Address</th>
                <th scope="col" style="width: 10%; text-align: center;">quantity</th>
              </tr>
            </thead>
            <tbody id="output">
              <?php
                $sql="Select * from `panier`";
                $result=mysqli_query($con,$sql);
                if($result){              
                  while($row=mysqli_fetch_assoc($result)){
                    $idProduit=$row['idProduit'];
                    $ipAddress=$row['ipAddress'];
                    $quantity=$row['quantity'];
                    echo '<tr>
                    <th scope="row"></th>
                    <td style="width: 10%; text-align: center;">'.$idProduit.'</td>
                    <td style="width: 10%; text-align: center;">'.$ipAddress.'</td>
                    <td style="width: 10%; text-align: center;">'.$quantity.'</td>
                    <td>
                    <button class="btn btn-success ml-xl-4"><a href="updateProduit.php?
                    updateidProduit='.$idProduit.'"
                    class="text-white">Update</a></button>
                    <button class="btn btn-danger ml-xl-4"><a href="deleteProduit.php?
                    deleteidProduit='.$idProduit.'"
                    class="text-white">Delete</a></button>
                    </td>
                  </tr>';
                  }
                }
              
              ?>
             
            </tbody>
          </table>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <script type="text/javascript">
  $(document).ready(function(){
    $("#search").keypress(function(){
      $.ajax({
        type:'POST',
        url:'searchCart.php',
        data:{
          nameP:$("#search").val(),
        },
        success:function(data){
          $("#output").html(data);
        }
      });
    });
  });
</script>
</body>
