<?php
class association {
    private int $numA;
    private string $nameA;


    public function __construct(string $nameA,int $numA)
    {

    $this->numA=$numA;
    $this->nameA=$nameA;

    }

    public function getnumA()
    {
        return $this->numA;
    }
    public function getnameA()
    {
        return $this->nameA;
    }
    
    public function setnameA($nameA)
    {
        $this->nameA=$nameA;
    }
    public function setnumA($numA)
    {
        $this->numA=$numA;
    }
  
}