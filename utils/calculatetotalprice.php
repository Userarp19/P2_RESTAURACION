<?php
class CalculateTotalPrice{
    public static function calculateTPrice($orders){
         $totalPrice = 0;
        foreach ($orders as $order) {
            $pricePerUnite = $order->calculatePrice();
            $totalPrice += $pricePerUnite;
        }
        return $totalPrice;
    }
    
}

?>