<?php

class panier{
    private int $idPanier;
    private float $prixTotal;
    private int $fkProduit;

    public function __construct(int $idPanier,float $prixTotal,int $fkProduit)
    {

    $this->idPanier=$idPanier;
    $this->prixTotal=$prixTotal;
    $this->fkProduit=$fkProduit;
    }

    public function getidPanier()
    {
        return $this->idPanier;
    }
    public function getprixTotal()
    {
        return $this->prixTotal;
    }
    public function getfkProduit()
    {
        return $this->fkProduit;
    }
    public function setidPanier($idPanier)
    {
        $this->idPanier=$idPanier;
    }

    public function setprixTotal($prixTotal)
    {
        $this->prixTotal=$prixTotal;
    }
    public function setfkProduit($fkProduit)
    {
        $this->fkProduit=$fkProduit;
    }
}