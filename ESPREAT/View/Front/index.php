
<?php include('connect.php'); ?>
<?php include('header.php'); ?>
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
                <a class="nav-link" href="/ESPREAT/View/Front/cart.php"
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

      <?php
        $select= "select * from `produit`";
        $result=mysqli_query($con,$select);
        // $row=mysqli_fetch_assoc($result);
        // echo $row['nom'];
        while($row=mysqli_fetch_assoc($result)){
            $idProduit=$row['idProduit'];
            $nom=$row['nom'];
            $prix=$row['prix'];
            $quantite=$row['quantite'];
            echo "<div class='card'>
            <h1>nom_produit : $nom</h1>
            <p class='price'>prix : $prix dt</p>
            <p class='quantite'>prix : $quantite unité</p>
            <a href='index.php?add_to_cart=$idProduit' class='btn btn'>Add to cart</a>
          </div>";
        }
        function getIPAddress() {  
            //whether ip is from the share internet  
             if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                        $ip = $_SERVER['HTTP_CLIENT_IP'];  
                }  
            //whether ip is from the proxy  
            elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
             }  
        //whether ip is from the remote address  
            else{  
                     $ip = $_SERVER['REMOTE_ADDR'];  
             }  
             return $ip;  
        }
        // $ip = getIPAddress();  
        // echo 'User Real IP Address - '.$ip;  
        //add to cart 
            
        
            if (isset($_GET['add_to_cart'])) {
                $ip = getIPAddress();
                $get_product_id=$_GET['add_to_cart'];
                $select="select * from `panier` where ipAddress='$ip' and idProduit=$get_product_id";
                $result=mysqli_query($con,$select);
                $insert_query="insert into `panier` (idProduit, ipAddress, quantity) values ($get_product_id,'$ip',1)";
                $result=mysqli_query($con,$insert_query);
                echo "<script>alert('added to cart')</script>";
                echo "<script>window.open('index.php','_self')</script>";
        }

        //cart number 
        
        //     if (isset($_GET['add_to_cart'])) {
                
        //         $ip = getIPAddress();
        //         // $get_product_id=$_GET['add_to_cart'];
        //         $select="select * from `panier` where ipAddress='$ip'";
        //         $result=mysqli_query($con,$select);
        //         $count_cart_items=mysqli_num_rows($result);
        //         // $insert_query="insert into `panier` (idProduit, ipAddress, quantity) values ($get_product_id,'$ip',0)";
        //         else{
        //             $ip = getIPAddress();
        //             $select="select * from `panier` where ipAddress='$ip'";
        //             $result=mysqli_query($con,$select);
        //             $count_cart_items=mysqli_num_rows($result);
        //         }
        //         echo $count_cart_items;
        // }
        

        


      ?>

      <script src="/ESPREAT/View/Front/assets/js/foodhut.js"></script>

      </body>

      