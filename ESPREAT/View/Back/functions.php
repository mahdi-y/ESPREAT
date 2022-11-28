<?php

function createUser($conn,$nom,$numero,$idA){
    $query ="INSERT INTO association (nom,numero,idA) values(:nom,:numero,:idA);";
    $query_run = $conn->prepare($query);

    $data = [
        ':nom' => $nom,
        ':numero' => $numero,
        ':idA' => $idA
    ];
    $query_execute = $query_run->execute($data);
    if($query_execute)
    {
        
        header('Location: backtab.php');
        exit(0);
    }
    else
    {
        
        header('Location: backtab.php');
        exit(0);
    }
}

function createDonation($conn,$idDon,$identifiantClient,$classe,$gender,$montant,$anonymat){
    $query ="INSERT INTO donation (idDon,identifiantClient,classe,gender,montant,anonymat) values(:idDon,:identifiantClient,:classe,:gender,:montant,:anonymat);";
    $query_run = $conn->prepare($query);

    $data = [
        ':idDon' => $idDon,
        ':identifiantClient' => $identifiantClient,
        ':classe' => $classe,
        ':gender' => $gender,
        ':montant' => $montant,
        ':anonymat' => $anonymat,
    ];
    $query_execute = $query_run->execute($data);
    if($query_execute)
    {
        
        header('Location: backtabdonation.php');
        exit(0);
    }
    else
    {
        
        header('Location: backtabdonation.php');
        exit(0);
    }
}
?>