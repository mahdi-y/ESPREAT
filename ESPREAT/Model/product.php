<?php
class product {
    private int $idP;
    private string $nameP;
    private float $price;
    private int $quantity;
    private string $image;
    private string $description;
    private int $fkC;


    public function __construct(int $idP,string $nameP,float $price,string $image,string $description,int $fkC,int $quantity)
    {

    $this->idP=$idP;
    $this->nameP=$nameP;
    $this->price=$price;
    $this->quantity=$quantity;
    $this->image=$image;
    $this->description=$description;
    $this->fkC=$fkC;
  
    }

    public function getidP()
    {
        return $this->idP;
    }

    public function getnameP()
    {
        return $this->nameP;
    }
    public function getprice()
    {
        return $this->price;
    }
    public function getquantity()
    {
        return $this->quantity;
    }
    public function getimage()
    {
        return $this->image;
    }
    public function getdescription()
    {
        return $this->description;
    }

    public function getfkC()
    {
        return $this->fkC;
    }

    public function setidP($idP)
    {
        $this->idP=$idP;
    }

    public function setnameP($nameP)
    {
        $this->nameP=$nameP;
    }
    public function setprice($price)
    {
        $this->price=$price;
    }
    public function setquantity($quantity)
    {
        $this->quantity=$quantity;
    }
    public function setimage($image)
    {
        $this->image=$image;
    }
    public function setdescripton($description)
    {
        $this->description=$description;
    }
    public function setfkC($fkC)
    {
        $this->fkC=$fkC;
    }
}