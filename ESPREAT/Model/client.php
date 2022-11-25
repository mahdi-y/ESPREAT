<?php
class client {
    private int $idClient;
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $identifiant;
    private string $password;


    public function __construct(string $firstName,string $lastName,string $email,string $identifiant,string $password)
    {

    
    $this->firstName=$firstName;
    $this->lastName=$lastName;
    $this->email=$email;
    $this->identifiant=$identifiant;
    $this->password=$password;
    
  
    }

    

    public function getfirstName()
    {
        return $this->firstName;
    }
    public function getlastName()
    {
        return $this->lastName;
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

    public function setnom($firstName)
    {
        $this->firstName=$firstName;
    }
    public function setprenom($lastName)
    {
        $this->lastName=$lastName;
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