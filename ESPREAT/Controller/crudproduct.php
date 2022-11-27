<?php

/*include 'C:\xampp\htdocs\espreat\ESPREAT\ESPREAT\config.php';
include 'C:\xampp\htdocs\espreat\ESPREAT\ESPREAT\Model\product.php';

class crudproduct
{
    public function listproduct()
    {
        $sql = "SELECT * FROM product";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteproduct($idP)
    {
        $sql = "DELETE FROM product WHERE idP = :idP";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addproduct($product)
    {
        if(isset($_POST['submit']))
        {
        $sql = "INSERT INTO product
        VALUES (NULL, :nameP, :price, :filename, :quantity, :description, :fkC)";
        $db = config::getConnexion();
        try {
            
            $query = $db->prepare($sql);
            $query->execute([
                'nameP' => $product->getnameP(),
                'price' => $product->getprice(),
                'quantity' => $product->getquantity(),
                'image' => $product->getimage(),
                'description' => $product->getdescription(),
                'fkC' => $product->getfkC()

                
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}

    function updateproduct($product, $idP)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE product SET 
                    nameP = :nameP, 
                    price = :price, 
                    quantity = :quantity, 
                    image = :image
                    description = :description
                    fkC = :fkC
                WHERE idP= :idP'
            );
            $query->execute([
                'idP' => $idP,
                'nameP' => $product->getnameP(),
                'price' => $product->getprice(),
                'quantity' => $product->getquantity(),
                'image' => $product->getimage(),
                'description' => $product->getdescription(),
                'fkC' => $product->getfkC()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showproduct($idP)
    {
        $sql = "SELECT * from product where idP = $idP";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $product = $query->fetch();
            return $product;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}*/



/*session_start();
include ('C:\xampp\htdocs\espreat\ESPREAT\ESPREAT\config.php');
if (isset($_POST['submit'])) {

    $nameP=$_POST['nameP'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $image=$_POST['image'];
    $description=$_POST['description'];
    $fkC=$_POST['fkC'];

    //declaring variables
$filename = $_FILES['fileToUpload']['name'];
$filetmpname = $_FILES['fileToUpload']['tmp_name'];
//folder where images will be uploaded
$folder = 'img/';
//function for saving the uploaded images in a specific folder
move_uploaded_file($filetmpname, $folder.$filename);
//inserting image details (ie image name) in the database



/*if( $result) {
echo "</br>image uploaded"; 
}*/
    
    

   /* $query = "INSERT INTO product (nameP,price,image,quantity,description,fkC) VALUES (:nameP, :price, :filename, :quantity, :description, :fkC)";
    $query_run = $conn->prepare($query);

    $data = [
        ':nameP' => $nameP,
        ':price' => $price,
        ':filename' => $filename,
        ':quantity' => $quantity,
        ':description' => $description,
        ':fkC' => $fkC
        
    ];
    $query_execute = $query_run->execute($data);

    if ($query_execute) {
       $_SESSION['message']="inserted successfully";
        header('location:backproducts.php');
        exit(0);
     } 
     else
      {
        $_SESSION['message']="not inserted successfully";
        header('location:backproducts.php');
        exit(0);
     }

}*/
   


   





?>
