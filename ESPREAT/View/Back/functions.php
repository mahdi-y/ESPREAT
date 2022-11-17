<?php

function createUser($conn,$nom,$numero){
    $sql ="INSERT INTO association (nom,numero) values(?,?);";
    $stmt= mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt,$sql)){
        header("location : signup.php?error=stmtfailed ");
    exit();
    }
    mysqli_stmt_bind_param($stmt,"ss",$nom,$numero);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}
?>