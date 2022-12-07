<?php


session_start();
include ('../../config.php');
if (isset($_POST['submit'])) {

    $nameC=$_POST['nameC'];
    
    
    

    $query = "INSERT INTO category (nameC) VALUES (:nameC)";
    $query_run = $conn->prepare($query);

    $data = [
        ':nameC' => $nameC,
        
        
    ];
    $query_execute = $query_run->execute($data);

    if ($query_execute) {
       $_SESSION['message']="inserted successfully";
        header('location:backcategories.php');
        exit(0);
     } 
     else
      {
        $_SESSION['message']="not inserted successfully";
        header('location:backcategories.php');
        exit(0);
     }

}

   
?>

<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

<div class="container-fluid">
<form method="post">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                
                            </a>
                            <h3>Add category</h3>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nameC"  placeholder="name">
                            <label >Name</label>
                        </div>

                        
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="submit">Add category</button>
                       
                       
                    </div>
                </div>
            </div>
            </form>
        </div>

<?php include('footer.php'); ?>
</body>

</html>