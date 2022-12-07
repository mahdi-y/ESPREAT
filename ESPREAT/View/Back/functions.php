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

function createDonation($conn,$identifiantClient,$classe,$gender,$montant,$anonymat){
    $query ="INSERT INTO donation (identifiantClient,classe,gender,montant,anonymat) values(:identifiantClient,:classe,:gender,:montant,:anonymat);";
    $query_run = $conn->prepare($query);

    $data = [
        ':identifiantClient' => $identifiantClient,
        ':classe' => $classe,
        ':gender' => $gender,
        ':montant' => $montant,
        ':anonymat' => $anonymat,
    ];
    $query_execute = $query_run->execute($data);
    if($query_execute)
    {
        
        header('Location: ../Front/listedonation.php');
        exit(0);
    }
    else
    {
        
        header('Location: ../Front/listedonation.php');
        exit(0);
    }
}
?>