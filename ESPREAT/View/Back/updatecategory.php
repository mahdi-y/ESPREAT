<?php
session_start();
include ('../../config.php');
if (isset($_POST['submit']))
 {
    $idC=$_POST['idC'];
    $nameC=$_POST['nameC'];
    

    

    
try {
$query = "UPDATE category SET nameC=:nameC where idC= $idC LIMIT 1";
$statement = $conn ->prepare($query);
$data = [
    //':idP' => $idP,
    ':nameC' => $nameC,
    
];
$query_execute = $statement->execute($data);
if ($query_execute) {
    $_SESSION['message']="updated successfully";
     header('location:backcategories.php');
     exit(0);
  } 
  else
   {
     $_SESSION['message']="not updated successfully";
     header('location:backcategories.php');
     exit(0);
  }
}
catch (PDOException $e) 
{
echo $e->getMessage();
}

}
?>

<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

<div class="container-fluid">
<?php
    if (isset($_GET['updateid']))
    {
        $idC=$_GET['updateid'];
        $query = "SELECT * FROM category WHERE idC = :idC LIMIT 1";
        $statement = $conn ->prepare($query);
        $data = [
            ':idC' => $idC
        ];
        $statement->execute($data);
       $result = $statement->fetch(PDO::FETCH_OBJ);
    }
    
    ?>
<form method="POST">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                
                            </a>
                            <h3>Update category</h3>
                        </div>
                        <input type="hidden" class="form-control" name="idC" value="<?=$result->idC;?>">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nameC"  placeholder="name" value="<?=$result->nameC;?>">
                            <label >Name</label>
                        </div>

                        
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="submit">Update category</button>
                       
                       

                    </div>
                </div>
            </div>
            </form>
        </div>

<?php include('footer.php'); ?>
</body>

</html>