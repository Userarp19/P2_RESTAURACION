
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link href=<?=base_url."assets/css/full_estil27.css" ?> rel="stylesheet" type="text/css" media="screen">
    <title>MF STEAKEHOUSE</title>
    <link rel="icon" type="image/x-icon" href=<?=base_url."assets/icons/favicon.svg"?>>
</head>
<body class="backgroundMenu">
<?php

?>
<header>
  <div class="navPC d-none d-sm-block   bg-color1" >
    <nav class="navbar navbar-expand-sm mx-auto bg-color1 sizehd ">
        <div class="container-lg" >

          <div class="position-absolute top-50 start-0 translate-middle-y" >
            <a class="navbar-brand" href=<?=base_url."producto/index"?>><img src=<?=base_url."assets/icons/logo.svg"?> alt="" style="height: 65px;"></a>
          </div>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse navbar-brand position-absolute top-50 start-50 translate-middle" id="navbarNav">
            <ul class="navbar-nav " >
             <li class="nav-item">
                <a class="nav-link sizenv" href=<?=base_url."producto/menu"?>> MENU </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link sizenv" href="#"> ABOUT US </a>
              </li>
              <li class="nav-item">
                <a class="nav-link sizenv" href=<?=base_url."producto/promotion"?>> PROMOTIONS </a>
              </li>
            </ul>
            <div style="width: 15px; background-color:white;"> </div>
          </div>

        <div class="position-absolute top-50 end-0 translate-middle-y ">

          <div style="float:left; ">
          <ul class="navbar-nav  " >
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src=<?=base_url."assets/icons/usuario.svg"?> style="width:35px; height: auto; ">
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?=base_url.'producto/profile'?>">Your Profile</a></li>
                  <li><a class="dropdown-item" href="<?=base_url.'producto/logout'?>">Log Out</a></li>
                </ul>
              </li>
             
            </ul>      
        </div>
         

          <div style="float:left; padding-top:13%; ">
          <a href=<?=base_url."producto/carrito"?>><img src=<?=base_url."assets/icons/carrito1.svg"?> style="width:35px; height: auto;  "> </a>
              <p style="   text-decoration: none;  position: absolute;  left: -11px;  top: -11px;  z-index: 1; color:white;"> 
                    
                   
                    
                   <?=$orderCounts?>  
                    
              </p>
          </div>
            
           
      </div> 
        </div>
      </nav>
    </div>



    <div class="navPhone bg-color1 d-sm-none">
      

      <nav class="navbar navbar-expand-sm navbar-dark bg-color1 sizehd " style="margin:auto;">
        <div class="container-lg">

          <button class="navbar-toggler position-absolute top-50 start-0 translate-middle-y" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>
          <div class="collapse navbar-collapse position-absolute top-100 start-0" id="navbarNav">
            <ul class="navbar-nav tst " >
             <li class="nav-item ">
                <a class="nav-link sizenvm" href=<?=base_url."producto/menu"?>>MENU</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link sizenvm" href="#">ABOUT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link sizenvm" href=<?=base_url."producto/promotion"?>>PROMOTIONS</a>
              </li>
            </ul>
          </div>

            <a class="navbar-brand position-absolute top-50 start-50 translate-middle" href=<?=base_url."producto/index"?>><img src=<?=base_url."assets/icons/logo.svg"?> alt="" style="height: 60px; width:153px;"></a>
      
            <!--<div class="position-absolute top-50 end-0 translate-middle-y">
                  <a  href=<?=base_url."producto/carrito"?>><img src=<?=base_url."assets/icons/carrito1.svg"?> style="width:38px; height: 30px;"></a>
                <p style="   text-decoration: none;  position: absolute;  left: -11px;  top: -11px;  z-index: 1; color:white;"> 
                <?=$orderCounts?>   
                  </p>
            </div>-->
            <div class="position-absolute top-50 end-0 translate-middle-y ">

          <div style="float:left; ">
          <ul class="navbar-nav  " >
              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle  position-absolute top-50 end-0 translate-middle-y" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src=<?=base_url."assets/icons/usuario.svg"?> style="width:35px; height: auto; ">
                </a>
                <ul class="dropdown-menu bg-color1 position-absolute  top-100 start-100 translate-middle">
                  <li><a class="dropdown-item sizenvm" href="<?=base_url.'producto/profile'?>">Your Profile</a></li>
                  <li><a class="dropdown-item sizenvm" href="<?=base_url.'producto/logout'?>">Log Out</a></li>
                </ul>
              </li>
             
            </ul>      
        </div>
         

          <div  style="float:left; " class="position-absolute top-50 start-0 translate-middle-y">
          <a href=<?=base_url."producto/carrito"?>><img src=<?=base_url."assets/icons/carrito1.svg"?> style="width:35px; height: auto;  "> </a>
              <p style="   text-decoration: none;  position: absolute;  left: -11px;  top: -11px;  z-index: 1; color:white;"> 
                    
                   
                    
                   <?=$orderCounts?>  
                    
              </p>
          </div>
            
           
      </div> 
        </div>
            </div>
      </nav>


      
    </div>
   
</header>




