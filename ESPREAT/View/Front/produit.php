<?php include('connect.php') ?>
<?php
session_start();
include ('connect.php');
if(!isset($_SESSION["identifiant"])){
    header("location:login.php");
}
echo $_SESSION['identifiant'];

?>
<?php include('header.php') ?>
<?php include('navbar-logout.php') ?>


<?php


$query = "SELECT * FROM produit" ;
$statement = $db->prepare($query);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_OBJ);
$result = $statement->fetchAll();
if($result){
    foreach($result as $row){
?>

<div class="row">
            <div>
                <div>
                <div class="card-body">
                    <h1 style="margin-top: 250px; margin-left: 50px; font-size: 35px; width: 50%;" class="btn btn-secondary">
                        <?= $row->nom;?>
                    </h1>
                    <h4 style="margin-top: 15px; margin-left: 50px; font-size: 35px; width: 50%;" class="btn btn-secondary">
                    <a style="font-size: 25px; color: #ed1f24;" > <?= $row->prix;?> dt</a>
                    </h4>
                    <h4 style="margin-top: 15px; margin-left: 70px; width: 50%;">
                        <button class="btn btn-success">
                        <a href="addtocart.php?addidProduit=<?= $row->idProduit;?>" class="text-white">Add to Cart</a>
                        </button>
                    </h4>
                    
                </div>
            </div>
</div>
<?php
}}
else {
?>
<tr>
    <td colspan="3" style="width: 10%; text-align: center;">No products</td>
</tr>
<?php
}
?>



