<?php

require_once ("producte.php");
class Dirkns extends  Producte
{
    private $drinks;
    public function __construct($id, $name, $price, $picture,$quantity,$type){
        parent::__construct($id, $name, $price, $picture,$quantity,$type);
      
    }

   
    public function  calculatePrice(){
      return $this->quantity*$this->price;
    }

    
}
   

?>