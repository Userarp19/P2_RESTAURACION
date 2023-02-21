<?php
 require_once ("producte.php");
 require_once ("mainDishes.php");
 require_once ("drinks.php");
 require_once ("producteDAO.php");
 //$id, $name, $price, $picture,$mainDishes/$drinks
 $steaks = PRODUCTDAO::getAllProByType(1);
 $refreshes = PRODUCTDAO::getAllProByType(2);


                
?>