<?php

if(isset($_SESSION['compra'])){
    $orderMaxId = PRODUCTDAO::getMaxId('ID_PEDIDO','pedido');
    $orderMaxId = $orderMaxId + 1;
    $user_id = $_SESSION['user_id'];
    

    $OrdId = $orderMaxId;
    $OrdUseId = $user_id;
    $OrdState = 'pagado';
    $totalPrice=CalculateTotalPrice::calculateTPrice($_SESSION['compra']);

    $insert_order = PRODUCTDAO::insertOrders($OrdId,$OrdUseId,$OrdState,$totalPrice);

    var_dump($_SESSION['compra']);

    foreach($_SESSION['compra'] as $order){
        
        $OdeOrdId = $orderMaxId;
        $OdeProId = $order->getId();
        $OdeQuantity = $order->getQuantity();
        $ProductePrice = $order->calculatePrice();

        $insert_orderDe = PRODUCTDAO::insertOrderProducte($OdeOrdId,$OdeProId,$OdeQuantity,$ProductePrice);
      
      

    }

    header("Location:".base_url."producto/cockies");
}