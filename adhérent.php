<?php

require_once ("media.php");

class adherent extends C
{

    private $nom;
    private $prenom;
    private $numAdherent; 
    private $adresse; 
    private $listeArticleEmprunte;


public function __construct(int $numAdherent,int $adresse,int $prenom,int $nom) 
    {

        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->numAdherent=$numAdherent;
        $this->adresse=$adresse;
        $this->listeArticleEmprunte = [ ] ;
    }
public function numAdherent():int
{
 return $this->numAdherent;
}
public function __toString()
    {
         return parent::__toString()."emprunteLivre ".$this->emprunteLivre."rendreLivre ".$this->rendreLivre."LivresEmpruntes ".$this->LivresEmpruntes;
        
    }

public function emprunteArticles(Article $article){
    if($article>setDispo() && count($this->listeArtivleEmprunte) <5){

        $article->serDispo(false);
        $this->listeArtivleEmprunte [ ] = $article; 

    }
}

public function rendreArticle(string $code ){
    foreach($this->listeArtivleEmprunte as $cle=>$unarticle){
        if($unarticle->getcode===$code){
            $unarticle->setCode(false);
            array_splice($this->empruntArticle,$cle,1);
        }
    }

    
} 


public function listeArticleEmprunt() 
{
    return "";

}


}
?>
