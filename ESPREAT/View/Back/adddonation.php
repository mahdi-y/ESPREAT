<?php
include('connect.php');
include('functions.php');
if(isset($_POST["submit"])){
//$idDon = $_POST['idDon'];
$identifiantClient = $_POST['identifiantClient'];
$classe = $_POST['classe'];
$gender = $_POST['gender'];
$montant = $_POST['montant'];
$anonymat = $_POST['anonymat'];


require_once 'connect.php';
require_once 'functions.php';



createDonation($conn,$identifiantClient,$classe,$gender,$montant,$anonymat);
echo "<script>location.href='backtab.php';</script>";
}



if(isset($_POST["update_donation_btn"])){
    $donation_idDon = $_POST['donation_idDon'];
    $identifiantClient = $_POST['identifiantClient'];
    $classe = $_POST['classe'];
    $gender = $_POST['gender'];
    $montant = $_POST['montant'];
    $anonymat = $_POST['anonymat'];
    
    try {
        $query = "UPDATE donation SET identifiantClient=:identifiantClient, classe=:classe, gender=:gender, montant=:montant, anonymat=:anonymat  WHERE idDon=:dona_idDon LIMIT 1";
        $statement = $conn->prepare($query);

        $data = [
            
            ':identifiantClient' => $identifiantClient,
            ':classe' => $classe,
            ':gender' => $gender,
            ':montant' => $montant,
            ':anonymat' => $anonymat,
            ':dona_idDon' => $donation_idDon,

        ];
        $query_execute = $statement->execute($data);

    } catch (PDOException $e){
        echo $e->getMessage();
    }
    echo "<script>location.href='backtabdonation.php';</script>";
}


if(isset($_POST["delete_donation"])){
    $donation_idDon = $_POST['delete_donation'];
    try {

        $query = "DELETE FROM donation WHERE idDon=:dona_idDon";
        $statement = $conn->prepare($query);
        $data = [':dona_idDon' => $donation_idDon];
        $query_execute = $statement->execute($data);
    } catch(PDOExecute $e) {
        echo $e->getMessage();
    }
    echo "<script>location.href='backtabdonation.php';</script>";
}

