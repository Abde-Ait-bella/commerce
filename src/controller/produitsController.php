<?php
class ProduitsController{
    private $nom;
    private $quantity;
    private $photo;
    private $description;
    private $prix;

    public function __construct($nom,$quantity,$photo,$description,$prix){
        $this->nom=$nom;
        $this->quantity=$quantity;
        $this->photo=$photo;
        $this->description=$description;
        $this->prix=$prix;

    }
    public function addProduit(){
        $produits=new produits();
        $produits->addProduit($this->nom,$this->quantity,$this->description,$this->prix,$this->photo);
    }
}
?>