<?php
class commande {
    private int $idCommande;
    private string $bloc;
    private string $temps;
    private int $fkClient;
    private int $fkPanier;


    public function __construct(int $idCommande,string $bloc,string $temps,int $fkClient,int $fkPanier)
    {

    $this->idCommande=$idCommande;
    $this->bloc=$bloc;
    $this->temps=$temps;
    $this->fkClient=$fkClient;
    $this->fkPanier=$fkPanier;
    }

    public function getidCommande()
    {
        return $this->idCommande;
    }

    public function getbloc()
    {
        return $this->bloc;
    }
    public function gettemps()
    {
        return $this->temps;
    }
    public function getfkClient()
    {
        return $this->fkClient;
    }
    public function getfkPanier()
    {
        return $this->fkPanier;
    }

    public function setidCommande($idCommande)
    {
        $this->idCommande=$idCommande;
    }

    public function setbloc($bloc)
    {
        $this->bloc=$bloc;
    }
    public function settemps($temps)
    {
        $this->temps=$temps;
    }
    public function setfkClient($fkClient)
    {
        $this->fkClient=$fkClient;
    }
    public function setfkPanier($fkPanier)
    {
        $this->fkPanier=$fkPanier;
    }

}