<?php

$id_persona = PRODUCTDAO::getMaxId('ID_USUARIO','usuario');
$id_persona = $id_persona + 1;
$bcrypt = new Bcrypt(15);



$passwordincorrect = "";
$emailexcits = "";
$emailnot = "";

if(isset($_COOKIE['usermail'])){
  $usermail = $_COOKIE['usermail'];
}else{
  $usermail = "";
}

if(isset($_COOKIE['usercreating'])){
  $usercreating = $_COOKIE['usercreating'];
}else{
  $usercreating = "";
}

if(isset($_POST['form-first-name'])){
  $id = $id_persona;
  $name = $_POST['form-first-name'];
  $surname = $_POST['form-last-name'];
  $mobile = $_POST['form-mobile'];
  $email = $_POST['form-email'];
  $address = $_POST['form-Address'];
  $password = $_POST['form-password-1'];
  $rpassword = $_POST['form-password-2'];
  $ROLE = 0;

  $checkmail = PRODUCTDAO::getCheckUserEmail($email);
     
  if ($password == $rpassword){
    $passwordincorrect = "";
    if ($checkmail != $email){
      $emailexcits = "";
      $hash = $bcrypt->hash($password);
      $insert_user = PRODUCTDAO::insertUser($id,$name,$surname,$email,$hash,$mobile,$address,$ROLE);
      
        setcookie("usermail", "$email", time() + 60);
        setcookie("usercreating", $insert_user , time() + 2);
      
      header("Refresh:0");
      //header("Location:".base_url."pizza/login");
    }else{
      $emailexcits = "<p><b>With this email, the user already exists</b></p>";
      //header("Location:".base_url."pizza/login");
    } 

  }else{
    $passwordincorrect = "<p><b>Passwords do not match</b></p>";
    //header("Location:".base_url."pizza/login");
  } 

}

if(isset($_POST['form-username'])){
  $loginmail = $_POST['form-username'];
  $loginpass = $_POST['form-password'];


  $checklogin = PRODUCTDAO::getCheckUserLogin($loginmail);

  $listid = $checklogin['ID_USUARIO'];
  $listname = $checklogin['NOMBRE'];
  $listsurname = $checklogin['APELLIDOS'];
  $listemail = $checklogin['EMAIL'];
  $listpass = $checklogin['PASSWORD'];
  $listphone = $checklogin['TELEFONO'];
  $listAddress = $checklogin['DIRECCIÓN'];
  $listadmin =$checklogin['ROLE'];

  $isGood = $bcrypt->verify($loginpass, $listpass);

  if($isGood == true){
    $emailnot = "";
   // session_start();
    $_SESSION['user_id']=$listid;
    $_SESSION['user_name']=$listname;
    $_SESSION['user_admin']=$listadmin;
    header("Location:".base_url."producto/profile");
  }else{
    $emailnot = "<p><b>Incorrect username and/or password</b></p>";
    //header("Location:".base_url."pizza/login");
  }

}


?>