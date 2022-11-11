<?php
class category {
    private int $idC;
    private string $nameC;


    public function __construct(string $nameC,int $idC)
    {

    $this->idC=$idC;
    $this->nameC=$nameC;

    }

    public function getidC()
    {
        return $this->idC;
    }
    public function getnameC()
    {
        return $this->nameC;
    }
    
    public function setnameC($nameC)
    {
        $this->nameC=$nameC;
    }
  
}