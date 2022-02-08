<?php

require_once ("media.php");

class Livre extends C
{

    private $emprunteLivre;
    private $rendreLivre;
    private $livreEmpruntes; 


public function __construct(int $code,string $titre,string $listeAuteur,int $numAdherent,int $adresse,string $listeEmprunte,int $emprunteLivre, int $rendreLivre, int $livreEmpruntes) 
    {
        parent::__construct($code,$titre,$listeAuteur,$numAdherent,$adresse,$listeEmprunte);

        $this->emprunteLivre=$emprunteLivre;
        $this->rendrelivre=$rendreLivre;
        $this->livreEmpruntes = $livreEmpruntes;
    }


public function getlivreEmprunte():int
    {
        return $this->emprunteLivre;
    }

public function getrendreLivre():int
{
    return $this->rendreLivre;
}

public function getlivreEmpruntes():int
{
    return $this->livreEmpruntes;
}

public function __toString()
    {
         return parent::__toString()."emprunteLivre ".$this->emprunteLivre."rendreLivre ".$this->rendreLivre."LivresEmpruntes ".$this->LivresEmpruntes;
        
    }
