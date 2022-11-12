<?php
class client {
    private int $idClient;
    private string $nom;
    private string $prenom;
    private string $email;
    private string $identifiant;
    private string $password;


    public function __construct(int $idClient,string $nom,string $prenom,string $email,string $identifiant,string $password)
    {

    $this->idClient=$idClient;
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->email=$email;
    $this->identifiant=$identifiant;
    $this->password=$password;
    
  
    }

    public function getidClient()
    {
        return $this->idClient;
    }

    public function getnom()
    {
        return $this->nom;
    }
    public function getprenom()
    {
        return $this->prenom;
    }
    public function getemail()
    {
        return $this->email;
    }
    public function getidentifiant()
    {
        return $this->identifiant;
    }
    public function getpassword()
    {
        return $this->password;
    }
    public function setidClient($idClient)
    {
        $this->idClient=$idClient;
    }

    public function setnom($nom)
    {
        $this->nom=$nom;
    }
    public function setprenom($prenom)
    {
        $this->prenom=$prenom;
    }
    public function setemail($email)
    {
        $this->email=$email;
    }
    public function setidentifiant($identifiant)
    {
        $this->identifiant=$identifiant;
    }
    public function setpassword($password)
    {
        $this->password=$password;
    }
}