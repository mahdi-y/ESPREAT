<?php
include('dbh.inc.php');

if (isset($_POST['reset'])){
    $email= mysqli_real_escape_string($conn,$_POST['email']);
    $tokern=md5(rand());;

    $check_email = "SELECT email FROM client where email='$email' LIMIT 1";
    $check_email_run = mysqli_query($conn,$check_email);
    if(mysqli_num_rows($check_email_run)>0)
    {
        $row = mysqli_fetch_array($check_email_run);
        $get_name=$row['lastName'];
        $get_name=$row['email'];

    }
    else{
        $_SESSION['status']= "no email found";
        header("location! resetpass.php");
        exit(0);
    }


    
}
?>
