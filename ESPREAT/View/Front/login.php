<?php
session_start();
include ('connect.php');
if (isset($_POST["login"])){
    if ($_POST["identifiant"]==""){
        echo "<script>alert('Id Can't be empty')</script>";
    }else{
        $identifiant=trim($_POST["identifiant"]);
        $query=$db->prepare("SELECT * FROM client WHERE identifiant=?");
        $query->execute(array($identifiant));
        $control=$query->fetch(PDO::FETCH_OBJ);
        if ($control>0){
            $_SESSION["identifiant"]=$identifiant;
            header("Location:index-logout.php");
        }
        echo "<script>alert('Incorrect id')</script>";
    }
}
?>


<?php include('header.php') ?>
<?php include('navbar.php'); ?>
<style>
    .wrapper{
        position: absolute;
        top: 40%;
        left: 42%;
        padding: 10px;
        /* border: 1px solid black; */
        width: 300px;
        height: 250px;
        line-height: 40px;
        text-align: center;
        font-weight: bold;
    }
</style>
<body>
    <div class="wrapper">
        <form action="" method="post">
            <p>
                <label for="">Identifiant</label>
                <input type="text" name="identifiant" id="">
            </p>
            <button type="submit" name="login" class="btn btn-primary ml-xl-4">Login</button>
        </form>
    </div>
</body>