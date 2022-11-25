

<?php
include 'C:\xampp\htdocs\web\ESPREAT\ESPREAT\config.php';
include 'C:\xampp\htdocs\web\ESPREAT\ESPREAT\Model\client.php';
class ClientC
{
    public function listClients()
    {
        $sql = "SELECT * FROM client";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteClient($idClient)
    {
        $sql = " DELETE FROM client WHERE idClient = :idClient ";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idClient', $idClient);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addClient($client)
    {
        $sql = "INSERT INTO client ( lastName,firstName,email,identifiant,password)
        VALUES (:lastName, :firstName,:email,:identifiant , :password)";
        $db = config::getConnexion();
        try {
        
            $query = $db->prepare($sql);
            $query->execute([
                'lastName' => $client->getlastName(),
                'firstName' => $client->getfirstName(),
                'email' => $client->getemail(),
                'identifiant' => $client->getidentifiant(),
                'password' => $client->getpassword(),

            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateClient($client, $idClient)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE client SET 
                    lastName = :lastName, 
                    firstName = :firstName, 
                    email =:email,
                    identifiant = :identifiant, 
                    password = :password,
                   
                WHERE idClient= :idClient'
            );
            $query->execute([
                
                'lastName' => $client->getlastName(),
                'firstName' => $client->getfirstName(),
                'email' => $client->getemail(),
                'identifiant' => $client->getidentifiant(),
                'password' => $client->getpassword(),

            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showClient($idClient)
    {
        $sql = "SELECT * from client where idClient = $idClient";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $client = $query->fetch();
            return $client;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    
}
