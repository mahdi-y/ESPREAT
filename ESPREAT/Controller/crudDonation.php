<?php
include 'D:\xamp\htdocs\web\ESPREAT\ESPREAT\config.php';
include 'D:\xamp\htdocs\web\ESPREAT\ESPREAT\Model\donation.php';

class cruddonation
{
    public function listdonations()
    {
        $sql = "SELECT * FROM donation";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deletedonation($idClient)
    {
        $sql = "DELETE FROM donation WHERE idClient = :idClient";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idClient', $idClient);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function adddonation($donation)
    {
        $sql = "INSERT INTO donation  
        VALUES (:fn,:ln)";
        $db = config::getConnexion();
        try {
            
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $donation->getnumA(),
                'ln' => $donation->getnameA(),
                
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    /*function updatedonation($donation, $nameA)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE donation SET 
                    firstName = :firstName, 
                    lastName = :lastName, 
                    address = :address, 
                    dob = :dob
                WHERE nameA= :nameA'
            );
            $query->execute([
                'nameA' => $nameA,
                'firstName' => $donation->getFirstName(),
                'lastName' => $donation->getLastName(),
                'address' => $donation->getAddress(),
                'dob' => $donation->getDob()->format('Y/m/d')
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
*/
    function showdonation($nameA)
    {
        $sql = "SELECT * from donation where nameA = $nameA";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $donation = $query->fetch();
            return $donation;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}