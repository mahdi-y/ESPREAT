<?php

session_start();

if(isset($_SESSION['email']))
{
	unset($_SESSION['email']);

}

header("Location: ../Front/login.php");
die;