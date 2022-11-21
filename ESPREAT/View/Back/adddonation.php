
<?php
if(isset($_POST["submit"])){
$idClient = $_POST['idClient'];
$classe = $_POST['classe'];
$gender = $_POST['gender'];
$montant = $_POST['montant'];
$anonymat = $_POST['anonymat'];

require_once 'connect.php';
require_once 'functions.php';



createdonation($conn,$idClient,$classe,$gender,$montant,$anonymat);
echo "<script>location.href='backtabdonation.php';</script>";
}
else {
    header("location : signup.php");
    exit();
}