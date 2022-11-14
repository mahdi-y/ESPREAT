<?php

$con = new mysqli('localhost','root','','espreat');


if(!$con){
    die(mysqli_error($con)); 
}