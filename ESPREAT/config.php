<?php

$port = "3307";
$servername = "localhost";
$username = "root";
$password = "";
$database = "espreat";
try {
$conn = new PDO("mysql:host=$servername;dbname=$database;port=$port",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "connected successfully";

} catch (PDOException $e) {
    echo "connection failed" . $e->getMessage();
}


?>