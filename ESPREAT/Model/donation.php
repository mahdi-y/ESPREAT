<?php
class donation {
    
    private int $idClient;
    private string $classe;
    private int $gender;
    private int $montant;
    
    private int $anonymat;


    public function __construct(int $montant, int $idclient , string $classe,
    int $gender , int $anonymat)
    {

    $this->montant=$montant;
    $this->idClient=$idClient;
    $this->classe=$classe;
    $this->gender=$gender;
    
    $this->anonymat=$anonymat;
    

    }

    public function getmontant()
    {
        return $this->montant;
    }
    public function getidClient()
    {
        return $this->idClient;
    }
    public function getclasse()
    {
        return $this->classe;
    }
    public function getgender()
    {
        return $this->gender;
    }
   
    public function getanonymat()
    {
        return $this->anonymat;
    }
    public function setmontant($montant)
    {
        $this->montant=$montant;
    }
    public function setidClient($idClient)
    {
        $this->idClient=$idClient;
    }
    public function setclasse($classe)
    {
        $this->classe=$classe;
    }
    public function setgender($gender)
    {
        $this->gender=$gender;
    }
    
    public function setanonymat($anonymat)
    {
        $this->anonymat=$anonymat;
    }
    
    

  
}