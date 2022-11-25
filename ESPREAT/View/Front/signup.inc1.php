<?php
include_once '../../Controller/clientC.php';
include_once '../../Model/client.php';

$trouve=false;
session_start();
$ClientC= new ClientC;
if(isset($_POST["submit"])){
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email =  $_POST['email'];
$identifiant =  $_POST['identifiant'];
$password =  $_POST['password'];
$result = $ClientC -> listClients();
while($row = $result->fetch(PDO::FETCH_ASSOC))
    {
        if($row['email'] === $email)
        {
            $_SESSION['message'] = "Signup invalid ! Email Already Exists";
            $_SESSION['msg_type'] = "danger";
            header("location: signup.php");
        $trouve= true;
        }
    }

if($trouve == false){
    $client = new client($firstName,$lastName,$email,$identifiant,$password);
    $ClientC -> addClient($client);
    header("location: login.php");
    $_SESSION['message'] = "Signup success !";
    $_SESSION['msg_type'] = "success";
}
    
}