

<?php
       include_once("classes/drinks.php");
       include_once("classes/loadDishes.php");
       include_once("classes/mainDishes.php");
       include_once("classes/producte.php");
       session_start();
 //ORDERING FROM MENU//
 if(isset($_POST['dishe'])){
   
    $disheSel=$steaks[$_POST['dishe']];
    
    if(isset($_SESSION['compra'])){
        
        $isExist = false;
        foreach($_SESSION['compra'] as $item) {
            if ($item->getId() == $disheSel->getId() && $item->getType() == $disheSel->getType() ) {
                $item->setQuantity($item->getQuantity() + 1);
                $isExist = true;
                break;
            }
        }
        if (!$isExist) {
            array_push($_SESSION['compra'],$disheSel);
        }
        
    }else{
            $_SESSION['compra']=array();
            array_push($_SESSION['compra'],$disheSel);
    }
    header('Location:'.base_url.'producto/menu');
}
elseif(isset($_POST['drink'])){
   
    $drinkSel=$refreshes[$_POST['drink']];
   
    if(isset($_SESSION['compra'])){
        $isExist = false;
        foreach($_SESSION['compra'] as $item) {
            if ($item->getId() == $drinkSel->getId() && $item->getType() == $drinkSel->getType() ) {
                $item->setQuantity($item->getQuantity() + 1);
                $isExist = true;
                break;
            }
        }
        if (!$isExist) {
            array_push($_SESSION['compra'],$drinkSel);
        }

    }else{
            $_SESSION['compra']=array();
            array_push($_SESSION['compra'],$drinkSel);

    }
header('Location:'.base_url.'producto/menu');
}



//ORDERING FROM MENU//
//EDITING ORDERS FROM CART//

if (isset($_POST['Del'])) {
            
    $orderSel = $_SESSION['compra'][$_POST['pos']];
    if ($orderSel->getQuantity()==1) {
            unset($_SESSION['compra'][$_POST['pos']]);
            //Re-Index the array elements
            $_SESSION['compra'] = array_values($_SESSION['compra']);
            header('Location:'.base_url.'producto/carrito');
    }else{
            $orderSel=$_SESSION['compra'][$_POST['pos']];
            $orderSel->setQuantity($orderSel->getQuantity() - 1);  

            header('Location:'.base_url.'producto/carrito');
    }
}else if (isset($_POST['Add'])) {
    $orderSel = $_SESSION['compra'][$_POST['pos']];
    $orderSel->setQuantity($orderSel->getQuantity() + 1);
    header('Location:'.base_url.'producto/carrito');

}

if (isset($_POST['remove'])) {
    unset($_SESSION['compra'][$_POST['pos']]);
            //Re-Index the array elements
            $_SESSION['compra'] = array_values($_SESSION['compra']);
            header('Location:'.base_url.'producto/carrito');
}  
//EDITING ORDERS FROM CART//
        ?>