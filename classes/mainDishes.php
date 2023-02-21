<?php

require_once ("producte.php");
class MainDishes extends  Producte
{
    private $mainDishes;
    public function __construct($id, $name, $price, $picture,$quantity,$type){
        parent::__construct($id, $name, $price, $picture,$quantity,$type);
        
    }
    public function  calculatePrice(){
        return $this->quantity*$this->price;
    }
    

}
   

?>