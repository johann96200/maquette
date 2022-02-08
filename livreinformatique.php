<?php

require_once ("media.php");

class Livreinformatique extends C
{

    private $codeLivre;
    private $editeur;
    private $listeAuteurs;
    private $CDRom;
    private $titreLivre;


public function __construct(int $code,string $titre,string $listeAuteur,int $numAdherent,int $adresse,string $listeEmprunte, int $editeur, int $listeAuteurs,string $CDRom, int $titreLivre, int $codeLivre) 
    {
        parent::__construct($code,$titre,$listeAuteur,$numAdherent,$adresse,$listeEmprunte);

        $this->editeur=$editeur;
        $this->listeAuteurs = $listeAuteurs;
        $this->CDRom=$CDRom;
        $this->titreLivre=$titreLivre;
        $this->codeLivre=$codeLivre;
    }

public function getediteur():int
{
    return $this->editeur;
}

public function getlisteAuteurs():int
{
    return $this->listeAuteurs;
}

public function getCDRom(): string
{
    return $this->CDRom;
}

public function gettitreLivre():int
{
    return $this->titreLivre;
}

public function getcodeLivre():int
{
    return $this->codeLivre;
}

public function __toString()
    {
         return parent::__toString()." code".$this->code."editeur ".$this->editeur."ListeAuteurs ".$this->ListeAuteurs."titreLivre ".$this->titreLivre."codeLivre ".$this->codeLivre;
        
    }

 }

?>
