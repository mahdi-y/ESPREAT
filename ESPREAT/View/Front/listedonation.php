<?php include('../Back/header.php'); ?>


<?php include('../Back/connect.php'); ?>
<?php include('../Back/functions.php'); ?>

<!-- Recent Sales Start -->
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
          <li class="nav-item">
            <a class="nav-link" href="listeassociation.php">Les Associations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="listedonation.php">Les Dons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Back/backtab.php">Admin space</a>
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
        
      </div>
    </header>
    <form action="frontdonation.php" method="post">
                <button type="submit" name="submit" class="btn btn-primary py-3 w-100 mb-4" >add donation</button>
                </form>
 <div class="card-body">
    <form action="" method="get">
        <div class="row">
            <div class="input-group mb-3">
                <select name="sort_numeric" class="form-control">
                    <option value=""> >--Select option--<</option>
                    <option value="low-high"<?php if(isset($_GET['sort_numeric']) && $_GET['sort_numeric']== "low-high" ) { echo "selected";} ?> >low-high</option>
                    <option value="high-low"<?php if(isset($_GET['sort_numeric']) && $_GET['sort_numeric']== "high-low" ) { echo "selected";} ?> >high-low</option>

                </select>
                
                <button type="submit" class=""input-group-text btn btn-primary" id="basic-addon2">
                Filter

                </button>

            </div>
            
        </div>
    </form>

 </div>   
<div class="table-responsive">
    
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                               
                                
                            <tr class="text-white">
                                
                                    <th scope="col">id Client</th>
                                    <th scope="col">classe</th>
                                    <th scope="col">sexe</th>
                                    <th scope="col">montant</th>
                                    
                                    
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php

                                    $sort_option = "" ;
                                    if(isset($_GET['sort_numeric']))
                                    {
                                        if($_GET['sort_numeric'] == "low-high"){
                                            $sort_option = "ASC";
                                        }
                                        elseif($_GET['sort_numeric'] == "high-low"){
                                            $sort_option = "DESC";
                                        }
                                    }
                                    $query = "Select * from donation ORDER BY montant $sort_option";
                                    $statement = $conn->prepare($query);
                                    $statement->execute();

                                    $result = $statement->fetchAll(PDO::FETCH_OBJ);
                                    if($result)
                                    {
                                        foreach($result as $row)
                                        {
                                            if($row->anonymat == 1)
                                            {
                                            ?>
                                             
                                            
                                            <tr>
                                                
                                                <td><?= $row->identifiantClient; ?></td>
                                                <td><?= $row->classe; ?></td>
                                                <td><?= $row->gender; ?></td>
                                                <td><?= $row->montant; ?></td>
                                                
                                                
                                               
                                          
                                                
                                            </tr>
                                            
                                            <?php 
                                            }
                                        }
                                    }
                                    
                                    ?>
                                
                            </tbody>
                        </table>
                    </div>
            <!-- Recent Sales End -->
        
                    
                    </body>

</html>