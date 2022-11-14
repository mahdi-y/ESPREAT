<?php
class commandes {
    private int $idCommande;
    private string $bloc;
    private int $idClient;


    public function __construct(int $idCommande,string $bloc,int $idClient)
    {

    $this->idCommande=$idCommande;
    $this->bloc=$bloc;
    $this->idClient=$idClient;
    }

    public function getidCommande()
    {
        return $this->idCommande;
    }

    public function getbloc()
    {
        return $this->bloc;
    }

    public function getfkClient()
    {
        return $this->idClient;
    }
    public function setidCommande($idCommande)
    {
        $this->idCommande=$idCommande;
    }

    public function setbloc($bloc)
    {
        $this->bloc=$bloc;
    }

    public function setfkClient($idClient)
    {
        $this->idClient=$idClient;
    }
}