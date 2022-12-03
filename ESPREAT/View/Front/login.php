<?php
session_start();
include ('connect.php');
if (isset($_POST["login"])){
    if ($_POST["identifiant"]==""){
        echo "<script>alert('Id Can't be empty')</script>";
    }else{
        $user_id=trim($_POST["identifiant"]);
        $query=$db->prepare("SELECT * FROM client WHERE identifiant=?");
        $query->execute(array($user_id));
        $control=$query->fetch(PDO::FETCH_OBJ);
        if ($control>0){
            $_SESSION["identifiant"]=$user_id;
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
        left: 39%;
        padding: 10px;
        width: 300px;
        height: 250px;
        text-align: center;
        font-weight: bold;

    }
</style>
<body>
    <div class="wrapper">
        <form action="" method="post">
            <p>
                <label for="">Identifiant</label>
                <input type="text" name="identifiant" id="" class="form-control form-control-lg custom-form-control" placeholder="xxx J(M/F)T xxx">
            </p>
            <button type="submit" name="login" class="btn btn-primary" style="width: 150px;">Login</button>
        </form>
    </div>
</body>