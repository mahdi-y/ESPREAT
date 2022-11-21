<?php

$con=new mysqli('localhost','root','','offre');

if($con){
    echo"connection successfull";
}else{
    die(mysqli_error($con));
}


?>