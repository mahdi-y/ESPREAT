

<?php 
include_once '../../Controller/clientC.php';
include_once '../../Model/client.php';


session_start(); 
$ClientC= new ClientC;
if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
	$result = $ClientC -> listClients();
	 while($row = $result->fetch(PDO::FETCH_ASSOC))
	 
        
	 {if ($row['email'] === $email && $row['password'] === $password){
		$_SESSION['email'] = $row['email'];
		$_SESSION['lastName'] = $row['lastName'];
		$_SESSION['idClient'] = $row['idClient'];
		header("Location: home.php");
		echo $row['lastName'];
            }
		else {
                $_SESSION['message'] = "Login invalid ! Email Or Password is Incorrect. ";
                $_SESSION['msg_type'] = "danger";
                header("location: login.php");
            }
		}
      
}

    

