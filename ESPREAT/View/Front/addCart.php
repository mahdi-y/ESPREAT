<?php
if (isset($_GET['add_to_cart'])) {
                $ip = getIPAddress();
                $get_product_id=$_GET['add_to_cart'];
                $select="select * from `panier` where ipAddress='$ip' and idProduit=$get_product_id";
                $result=mysqli_query($con,$select);
                $insert_query="insert into `panier` (idProduit, ipAddress, quantity) values ($get_product_id,'$ip',1)";
                $result=mysqli_query($con,$insert_query);
                echo "<script>alert('added to cart')</script>";
                echo "<script>window.open('index.php','_self')</script>";
        }