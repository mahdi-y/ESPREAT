<?php
//require 'C:\xampp\htdocs\espreat\ESPREAT\ESPREAT\config.php';
include 'C:\xampp\htdocs\espreat\ESPREAT\ESPREAT\Model\product.php';

class crudproduct
{
  /*  public function listProduits()
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

    function deleteProduct($id)
    {
        $sql = "DELETE FROM product WHERE idP = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addProduct($product)
    {
        $sql = "INSERT INTO product  
        VALUES (null, :np,:pp, :qp,:ip,:dp)";
        $db = config::getConnexion();

        try {
            $query = $db->prepare($sql);
            $query->execute([
                
                'np' => $product->getnameP(),
                'pp' => $product->getprice(),
                'qp' => $product->getquantity(),
                'ip' => $product->getimage(),
                'dp' => $product->getdescription()
                
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateProduct($product, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE product SET 
                    nameP = :nameP, 
                    price = :price, 
                    quantity = :quantity, 
                    image = :image, 
                    description = :description
                WHERE idP= :idP'
            );
            $query->execute([
                'idP' => $id,
                'nameP' => $product->getnameP(),
                'price' => $product->getprice(),
                'quantity' => $product->getquantity(),
                'image' => $product->getimage(),
                'description' => $product->getdescription()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showproduct($id)
    {
        $sql = "SELECT * from product where idP = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $product = $query->fetch();
            return $product;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }*/
}
?>
