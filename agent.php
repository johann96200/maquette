<?php

require_once ("salarie.php");

class Agent extends Salarie 

{ 

private $prime ; 


public function __construct(int $matricule,string $nom,DateTime $dateEmbauche,DateTime $dateNaissance,float $salaireBase, $prime)

{
    parent::__construct($nom,$matricule,$dateEmbauche,$dateNaissance,$salaireBase);

         $this->prime=$prime;
}
public function getprime():float
     {
         return $this->prime;
     }

public function setprime(float $prime) 
{
    $this->prime = $prime; 
}
function __toString()
        {
             return parent::__toString()."prime ".$this->prime;
            
        }

}

?> 
