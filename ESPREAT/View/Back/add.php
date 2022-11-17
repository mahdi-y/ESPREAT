<?php
if(isset($_POST["submit"])){
echo"jawek behi";
$nom = $_POST['nom'];
$numero = $_POST['numero'];

require_once 'connect.php';
require_once 'functions.php';



createUser($conn,$nom,$numero);
}
else {
    header("location : signup.php");
    exit();
}