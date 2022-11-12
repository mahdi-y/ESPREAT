<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email =  $_POST['email'];
$identifiant =  $_POST['identifiant'];
$password =  $_POST['password'];
//database conn
$conn = new mysqli('localhost','root','','espreat');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into client(nom,prenom,email,identifiant,password)values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$nom,$prenom,$email,$identifiant,$password);
    $stmt->execute();
    echo"jawek behi";
    $stmt->close();
    $conn->close();

}
