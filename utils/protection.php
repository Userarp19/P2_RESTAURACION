<?php
session_start();

if((!isset($_SESSION['user_id'])) and (!isset($_SESSION['user_name']))){
    header("Location:".base_url."producto/loginRegistrar");
}
?>




