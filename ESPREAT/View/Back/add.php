<?php
include('connect.php');
include('functions.php');
if(isset($_POST["submit"])){
$nom = $_POST['nom'];
$numero = $_POST['numero'];
$idA = $_POST['idA'];
$association_idA = $_POST['association_idA'];

require_once 'connect.php';
require_once 'functions.php';



createUser($conn,$nom,$numero,$idA);
echo "<script>location.href='backtab.php';</script>";
}



if(isset($_POST["update_student_btn"])){
    $association_idA = $_POST['association_idA'];
    $nom = $_POST['nom'];
    $numero = $_POST['numero'];
    
    try {
        $query = "UPDATE association SET nom=:nom, numero=:numero WHERE idA=:asso_idA LIMIT 1";
        $statement = $conn->prepare($query);

        $data = [
            ':nom' => $nom,
            ':numero' => $numero,
            ':asso_idA' => $association_idA,

        ];
        $query_execute = $statement->execute($data);

    } catch (PDOException $e){
        echo $e->getMessage();
    }
    echo "<script>location.href='backtab.php';</script>";
}


if(isset($_POST["delete_association"])){
    $association_idA = $_POST['delete_association'];
    try {

        $query = "DELETE FROM association WHERE idA=:asso_idA";
        $statement = $conn->prepare($query);
        $data = [':asso_idA' => $association_idA];
        $query_execute = $statement->execute($data);
    } catch(PDOExecute $e) {
        echo $e->getMessage();
    }
    echo "<script>location.href='backtab.php';</script>";
}

