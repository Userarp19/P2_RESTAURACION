<?php 
    
    $id = $_SESSION['user_id'];
    $user = PRODUCTDAO::getuserById($id);
    //$userAdress = PRODUCTDAO::getuserAddressByUserId($id);
    //$useraddMaxId = PRODUCTDAO::getuserMaxId('AddId','address');
    //$useraddMaxId = $useraddMaxId + 1;
    
    $bcrypt = new Bcrypt(15);
    
    $username = $user['NOMBRE'];
    $usersurname = $user['APELLIDOS'];
    $useremail = $user['EMAIL'];
    $userpass = $user['PASSWORD'];
    $userphone = $user['TELEFONO'];
    $userAddress = $user['DIRECCIÓN'];
    $useradmin =$user['ROLE'];

  
    /**if($useraddMaxId == 1){
      $userAdr = '';
      $userPostcode = '';
    }else{
      $userAdId = $userAdress['AddId'];
      $userAdr = $userAdress['AddAddress'];
      $userPostcode = $userAdress['AddPostalCode'];
    }*/
    

    
    $passwordincorrect = "";
    $emailexcits = "";
    $Userhavebeen = "";

    if(isset($_COOKIE['datosm'])){
      $datosm = $_COOKIE['datosm'];
    }else{
      $datosm = "";
    }

    

    if(isset($_POST['form-first-name'])){
      
      $name = $_POST['form-first-name'];
      $surname = $_POST['form-last-name'];
      $mobile = $_POST['form-mobile'];
      $email = $_POST['form-email'];
      $password = $_POST['form-password-1'];
      $rpassword = $_POST['form-password-2'];
      $address = $_POST['form-Address'];
    // $postalcode = $_POST['postalcode'];

      $checkmail = PRODUCTDAO::getCheckUserEmail($email);

      if ($password == $rpassword){
        if($password == $userpass){
          $hash = $password;
        }else{
          $hash = $bcrypt->hash($password);
        }
        
        $passwordincorrect = "";
        if (($checkmail != $email) || ($useremail == $email) ){
          $emailexcits = "";
          $update_user = PRODUCTDAO::updateUserById($id,$name,$surname,$mobile,$email, $address,$hash);
          /**if($useraddMaxId == 1){
            $insert_address = PRODUCTDAO::insertAddress($useraddMaxId,$address,$postalcode,$id);
          }else{
            $update_address = PRODUCTDAO::updateAddress($useraddMaxId,$address,$postalcode,$id);
          */ }
          
          $_SESSION['user_id']=$id;
          $_SESSION['user_name']=$name;
          $_SESSION['user_admin']=$useradmin;
          $Userhavebeen = "<p><bThe changes are saved correctly.</b></p>";
          //header("Refresh:0");
          //header("Location:".base_url."pizza/profile");
        }else{
          $emailexcits = "<p><b>This email is already in use</b></p>";
        }
  
      }else{
        $passwordincorrect = "<p><b>the Passwords have to match</b></p>";
      } 
    

?>