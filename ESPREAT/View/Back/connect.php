<?php
$port = "3306";
$servername = "localhost";
$username = "root";
$password = "";
$database = "espreat";
try {
$db = new PDO("mysql:host=$servername;dbname=$database;port=$port",$username,$password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "connection failed" . $e->getMessage();
}




?>