<?php
include 'D:\xamp\htdocs\web\ESPREAT\ESPREAT\config.php';
include 'D:\xamp\htdocs\web\ESPREAT\ESPREAT\Model\association.php';

class crudassociation
{
    public function listAssociations()
    {
        $sql = "SELECT * FROM association";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteassociation($idA)
    {
        $sql = "DELETE FROM association WHERE idA = :idA";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idA', $idA);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addassociation($association)
    {
        $sql = "INSERT INTO association  
        VALUES (:fn,:ln)";
        $db = config::getConnexion();
        try {
            
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $association->getnumA(),
                'ln' => $association->getnameA(),
                
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    /*function updateassociation($association, $nameA)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE association SET 
                    firstName = :firstName, 
                    lastName = :lastName, 
                    address = :address, 
                    dob = :dob
                WHERE nameA= :nameA'
            );
            $query->execute([
                'nameA' => $nameA,
                'firstName' => $association->getFirstName(),
                'lastName' => $association->getLastName(),
                'address' => $association->getAddress(),
                'dob' => $association->getDob()->format('Y/m/d')
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
*/
    function showassociation($nameA)
    {
        $sql = "SELECT * from association where nameA = $nameA";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $association = $query->fetch();
            return $association;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}