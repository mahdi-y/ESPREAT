<?php

include '../Controller/association.php';

$error = "";

// create client
$client = null;

// create an instance of the controller
$association = new association();
if (
    isset($_POST["numA"]) &&
    isset($_POST["nameA"])
) {
    if (
        !empty($_POST['numA']) &&
        !empty($_POST["nameA"]))
        
    {
        $client = new association();
            
            $_POST['numA'];
            $_POST['nameA'];
            
        $association->addassociation($client);
        header('Location:ListClients.php');
    } else
        $error = "Missing information";
}
?>