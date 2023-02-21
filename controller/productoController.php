<?php

class productoController{
    public static function index(){
        
        include_once("classes/drinks.php");
        include_once("classes/loadDishes.php");
        include_once("classes/mainDishes.php");
        include_once("classes/producte.php");
        include_once("utils/calculatetotalprice.php");
        session_start();
        
        
       if(isset($_SESSION['compra'])){
         $orderCounts = count($_SESSION['compra']);
       }else{
         $orderCounts = '';
       }
        require_once 'views/includes/header.php';
        require_once 'views/principal.php';
        require_once 'views/includes/footer.php';
    }

    public function menu(){
      
        include_once("classes/drinks.php");
        include_once("classes/loadDishes.php");
        include_once("classes/mainDishes.php");
        include_once("classes/producte.php");
        include_once("utils/calculatetotalprice.php");
        session_start();
        if(isset($_SESSION['compra'])){
            $orderCounts = count($_SESSION['compra']);
          }else{
            $orderCounts = '';
          }


        require_once 'views/includes/header.php';
        require_once 'views/menu.php';
        require_once 'views/includes/footer.php';
        
        
    }

   

    public function carrito(){
       
        include_once("classes/drinks.php");
        include_once("classes/loadDishes.php");
        include_once("classes/mainDishes.php");
        include_once("classes/producte.php");
        include_once("utils/calculatetotalprice.php");
        session_start();
        if(isset($_SESSION['compra'])){
            $orderCounts = count($_SESSION['compra']);
          }else{
            $orderCounts = '';
          }

          
      
        require_once 'views/includes/header.php';
        require_once 'views/carrito.php';
        require_once 'views/includes/footer.php';
        
          
    }

    public function sessions(){
       
        
        require_once 'views/sessions.php'; 
    }


public function cockies(){
       
    include_once("classes/drinks.php");
    include_once("classes/loadDishes.php");
    include_once("classes/mainDishes.php");
    include_once("classes/producte.php");
    include_once("utils/calculatetotalprice.php");
    session_start();
    if(isset($_SESSION['compra'])){
        $orderCounts = count($_SESSION['compra']);
      }else{
        $orderCounts = '';
      }

      //FINISHING THE ORDER AND SAVIN IT IN THE COCKIES//

      $valorcockie='';
if(!isset($_COOKIE["ENDOrder"])) {

    setcookie("ENDOrder", "", time() + (86400 * 1), "/");  

    
    
        foreach ($_SESSION['compra'] as $order) {
            
            $cockieValue .= '<p>Dishe Name:  '.$order->getName().', <br>Quantity: '.$order->getQuantity().'<br>Price: '.$order->calculatePrice().'.</p><br>';
    
        }
        $cockieValue .= '<p ><b>Total Price: </b> '.CalculateTotalPrice::calculateTPrice($_SESSION['compra']).'€</p><br>';
       
        setcookie("ENDOrder", "$cockieValue", time() + (86400 * 1), "/");
        
        session_destroy();
  }
   
  if(isset($_COOKIE["ENDOrder"])) {
    $valorcockie=$_COOKIE["ENDOrder"];
 
  }
  
//FINISHING THE ORDER AND SAVIN IT IN THE COCKIES//
  
    require_once 'views/includes/header.php';
    require_once 'views/cockies.php';
    require_once 'views/includes/footer.php';
    
      
}

public static function privacyPolicy(){
        
    include_once("classes/drinks.php");
    include_once("classes/loadDishes.php");
    include_once("classes/mainDishes.php");
    include_once("classes/producte.php");
    include_once("utils/calculatetotalprice.php");
    session_start();
    
    
   if(isset($_SESSION['compra'])){
     $orderCounts = count($_SESSION['compra']);
   }else{
     $orderCounts = '';
   }
    require_once 'views/includes/header.php';
    require_once 'views/privacyPolicy.php';
    require_once 'views/includes/footer.php';
}



public static function promotion(){
        
    include_once("classes/drinks.php");
    include_once("classes/loadDishes.php");
    include_once("classes/mainDishes.php");
    include_once("classes/producte.php");
    include_once("utils/calculatetotalprice.php");
    session_start();
    
    
   if(isset($_SESSION['compra'])){
     $orderCounts = count($_SESSION['compra']);
   }else{
     $orderCounts = '';
   }
    require_once 'views/includes/header.php';
    require_once 'views/promotion.php';
    require_once 'views/includes/footer.php';
}


public static function loginRegistrar(){
        
  
    
  session_start();
  
   include ("classes/producteDAO.php");
   include ("utils/Bcrypt.php");
  
   include ("utils/logging.php");
   if(isset($_SESSION['compra'])){
    $orderCounts = count($_SESSION['compra']);
  }else{
    $orderCounts = '';
  }
  include ("views/includes/header.php");
    require_once 'views/loginRegistrar.php';
    require_once 'views/includes/footer.php';
}

public function profile(){
  
  require("utils/protection.php");
  if(isset($_SESSION['compra'])){
    $orderCounts = count($_SESSION['compra']);
  }else{
    $orderCounts = '';
  }
  include ("classes/producteDAO.php");
  include ("utils/Bcrypt.php");
  include ("views/includes/header.php");
  include ("utils/editarProfile.php");
  include ("views/profile.php");
  include ("views/includes/footer.php");
  
}
public function logout(){

  include ("utils/logginout.php");
  
}

public function añadirProducto(){

    
  require("utils/protection.php");
   
  if(isset($_SESSION['compra'])){
    $orderCounts = count($_SESSION['compra']);
  }else{
    $orderCounts = '';
  }

  include ("classes/producteDAO.php");
 
  include ("views/includes/header.php");

        $id_User = $_SESSION['user_id'];
          
        $productMaxId = PRODUCTDAO::getMaxId('ID_PRODUCTO','producto');
        $productMaxIdNEW = $productMaxId + 1;
        
        

        $pm = '';


        
          if(isset($_POST['form-name'])){

            $id = $_POST['form-IdProd'];
            $name = $_POST['form-name'];
            $quantity = $_POST['form-quantity'];
            $price = $_POST['form-price'];
            $category = $_POST['form-category'];
            
            
          
          
              if ((($_FILES["form-foto"]["type"] == "image/jpeg") || ($_FILES["form-foto"]["type"] == "image/png") || ($_FILES["form-foto"]["type"] == "image/webp"))) {

                $srcimg = $_FILES["form-foto"]["name"];
                $ruta = 'assets/images/'. $srcimg;
                $resultado2 = move_uploaded_file($_FILES["form-foto"]['tmp_name'], $ruta);
        
                $insert_product = PRODUCTDAO::createProducte($id,$name,$quantity,$price,$category,$ruta);
                $pm = "<p>Producte was created successfully.</p>";
                
              }else{
                $pm = "<p>Wrong file format.</p>";
                //header("Refresh:0");
              }
            
              
            
              
              
          }
            include ("views/añadirProducto.php");
            include ("views/includes/footer.php");
            
}

public function mostrarProducteAdmin(){
  
  
  require("utils/protection.php");
  include_once("classes/drinks.php");
  include_once("classes/loadDishes.php");
  include_once("classes/mainDishes.php");
  include_once("classes/producte.php");
  include_once("utils/calculatetotalprice.php");
  if(isset($_SESSION['compra'])){
    $orderCounts = count($_SESSION['compra']);
  }else{
    $orderCounts = '';
  }
  include ("views/includes/header.php");
  include ("views/mostrarProducteAdmin.php");
  include ("views/includes/footer.php");
  
}


public function deleteProducte(){

  require("utils/protection.php");
  include ("classes/producteDAO.php");
  include ("utils/deleteProducte.php");
  
}

public function modifyProducte(){

  require("utils/protection.php");
  include_once("classes/drinks.php");
  include_once("classes/loadDishes.php");
  include_once("classes/mainDishes.php");
  include_once("classes/producte.php");
  if(isset($_SESSION['compra'])){
    $orderCounts = count($_SESSION['compra']);
  }else{
    $orderCounts = '';
  }
  
  include ("views/includes/header.php");


  $id_User = $_SESSION['user_id'];
          
  $productMaxId = PRODUCTDAO::getMaxId('ID_PRODUCTO','producto');
  $productMaxIdNEW = $productMaxId + 1;
  
  $idOLD = '';
  $nameOLD = '';
  $quantityOLD = '';
  $priceOLD = '';
  $categoryOLD = '';
  $pictureOLD = '';


  if(isset($_POST['edit'])){
    $product_id = $_POST['edit'];

    
    foreach($steaks as $stake){
      if ($stake->getId()==$product_id) {
        $productselected=$stake;
      }

    }
    foreach($refreshes as $drink){
      if ($drink->getId()==$product_id) {
        $productselected=$drink;
      }
      
    }
    
//ID_PRODUCTO,NOMBRE,PRECIO,PICTURE,QUANTITY,ID_CATEGORIA
    $idOLD = $productselected->getId();
    $nameOLD = $productselected->getName();
    $pictureOLD = $productselected->getPicture();
    $quantityOLD = $productselected->getQuantity();
    $categoryOLD = $productselected->getType();
    $priceOLD = $productselected->getPrice();

    
    if($categoryOLD == 1){
      $option1Selected = "selected";
      $option2Selected = "";

    }elseif($categoryOLD == 2){
      $option1Selected = "";
      $option2Selected = "selected";

    }else{
      $option1Selected = "";
      $option2Selected = "";
    }
    
  }


  
    if(isset($_POST['form-name'])){

      $id = $_POST['form-IdProd'];
      $name = $_POST['form-name'];
      $quantity = $_POST['form-quantity'];
      $price = $_POST['form-price'];
      $category = $_POST['form-category'];
      
      
    
    
        if ((($_FILES["form-foto"]["type"] == "image/jpeg") || ($_FILES["form-foto"]["type"] == "image/png") || ($_FILES["form-foto"]["type"] == "image/webp"))) {

          $srcimg = $_FILES["form-foto"]["name"];
          $ruta = 'assets/images/'. $srcimg;
          $resultado2 = move_uploaded_file($_FILES["form-foto"]['tmp_name'], $ruta);
  
          $insert_product = PRODUCTDAO::updateProducte($id,$name,$quantity,$price,$category,$ruta);
          $pm = "<p>Producte was created successfully.</p>";
          
        }else{
          $pm = "<p>Wrong file format.</p>";
          
        }
      
        
      
        
        
    }

  
  include ("views/modifyProducte.php");
  include ("views/includes/footer.php");
  
}



public function userOrders(){

  require("utils/protection.php");
  include ("classes/producteDAO.php");
  
  if(isset($_SESSION['compra'])){
    $orderCounts = count($_SESSION['compra']);
  }else{
    $orderCounts = '';
  }
  
  include ("views/includes/header.php");

  include ("views/userOrders.php");
  include ("views/includes/footer.php");
  
}

}


