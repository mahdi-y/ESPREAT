<?php
include_once 'C:\xampp\htdocs\web\ESPREAT\ESPREAT\Controller\clientC.php';
$clientC = new ClientC();
$clientC->deleteClient($_GET["idClient"]);
header('Location:table1.php');
