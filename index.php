
<?php
include_once 'controller/productoController.php';
include_once 'utils/parameters.php';

if (!isset($_GET['controller'])){
  header("Location:".base_url."producto/index");
}else{
  $nombreController = $_GET['controller'].'Controller';
  if (class_exists($nombreController)){
    $controlador = new $nombreController();
    if (isset($_GET['action']) && method_exists($controlador,$_GET['action'])){
      $action = $_GET['action'];
    }else{
      $action = 'index';
    }
    $controlador->$action();
    
  }else{
    header("Location:".base_url."producto/index");
  }
  unset($_GET['controller']);
  unset($_GET['action']);
}