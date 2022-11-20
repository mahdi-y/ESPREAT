<?php
if(isset($_POST["submit"])){
$nom = $_POST['nom'];
$numero = $_POST['numero'];

require_once 'connect.php';
require_once 'functions.php';



createUser($conn,$nom,$numero);
echo "<script>location.href='backtab.php';</script>";
}
else {
    header("location : signup.php");
    exit();
}