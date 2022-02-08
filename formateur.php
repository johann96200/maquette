<?php

require_once ("salarie.php");


class Formateur extends Salarie


{

private $renumerartionHsup;
private $nbrHS;
private $tx;

public function __construct(int $matricule,string $nom,DateTime $dateEmbauche,DateTime $dateNaissance,float $salaireBase, $renumerationHsup, $nbrHS)

{
    parent::__construct($nom,$matricule,$dateEmbauche,$dateNaissance,$salaireBase);

         $this->renumerationHsup=$renumerationHsup;
         $this->nbrHS=$nbrHS;
         $this->tx = 2;
}



public function getrenumerationHsup():float
    {
        return $this->renumerationHsup;
    }

public function setrenumerationHsup(float $renumerationHsup) 
    {
        $this->renumerationHsup = $renumerationHsup; 
    }

public function getsalaireNet():int
    {
        $salaireNet = ($this->salaireBase + $this->nbrHS * $this->renumerationHsup)*(1-$this->tx);
        return $salaireNet; 
    }

public function __toString()
    {
         return parent::__toString()."renumerationHsup ".$this->renumerationHsup;
        
    }

 
 
}


?>
