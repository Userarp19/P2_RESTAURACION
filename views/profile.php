<?php
$admin = $_SESSION['user_admin'];
if($admin == 1){?>
    <section class="container-fluid py-5 bg-dark text-white" style="margin-top: 100px; background-color: #E4D5C5; width:50%;">
      <div class="container-lg px-3 text-white">
        <div class="row px-3-sm d-flex justify-content-center">
            <a onclick="location.href='<?=base_url.'producto/mostrarProducteAdmin'?>'" class="bg-color1 col-sm-3 col-md btn btn-outline-secondary px-md-3 m-2 fw-bold" style="font-family: 'trebuc';
  color: white;">Products</a>
            <a onclick="location.href='<?=base_url.'producto/añadirProducto'?>'" class="bg-color1 col-sm-3 col-md btn btn-outline-secondary px-md-3 m-2 fw-bold" style="font-family: 'trebuc';
  color: white;">Add Producte</a>
            <a onclick="location.href='<?=base_url.'producto/userOrders'?>'" class="bg-color1 col-sm-3 col-md btn btn-outline-secondary px-md-3 m-2 fw-bold" style="font-family: 'trebuc';
  color: white;">View Orders</a>
        </div>
      </div>
    </section>
<?php }else{?>
  <section class="container-fluid py-5 bg-dark text-white" style="margin-top: 100px; background-color: #E4D5C5; width:50%;">
    <div class="container-lg px-3">
      <div class="row px-3-sm d-flex justify-content-center text-white">
         <a onclick="location.href='<?=base_url.'producto/userOrders'?>'" class="bg-color1 col-sm-3  btn btn-outline-secondary px-md-3 m-2 fw-bold " style="font-family: 'trebuc';
  color: white;">My Orders</a>
      </div>
    </div>
  </section>
  
<?php }?>

                        
                        
<section class="vh-100 my-5 pb-5" >
  <div class="container h-100">
  <div class="w-100 p-3 d-flex justify-content-center  text-white"  style="font-family: 'trebuc';">
                        	
                        	<div class="col-xl-9 bg-dark px-5 py-5 ">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Modify your acount</h3>
	                            		<p></p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">First name</label>
				                        	<input type="text" name="form-first-name" value="<?=$username?>" class="form-first-name form-control" id="form-first-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Last name</label>
				                        	<input type="text" name="form-last-name" value="<?=$usersurname?>"  class="form-last-name form-control" id="form-last-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">Email</label>
				                        	<input type="email" name="form-email" value="<?=$useremail?>"  class="form-email form-control" id="form-email">
				                        </div>
										
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-about-yourself">Phone Number</label>
				                        	<input type="number" name="form-mobile"  value="<?=$userphone?>"  class="form-mobile form-control" id="form-mobile">
				                        </div>
                                <div class="form-group">
				                        	<label class="sr-only" for="form-about-yourself">Address</label>
				                        	<input type="text" name="form-Address"  value="<?=$userAddress?>" class="form-Address form-control" id="form-mobile">
				                        </div>

										<div class="form-group">
				                        	<label class="sr-only" for="form-email">Password</label>
				                        	<input type="password" name="form-password-1"  value="<?=$userpass?>" class="form-email form-control" id="form-password-1">
				                        </div>
                                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">Password</label>
				                        	<input type="password" name="form-password-2"  value="<?=$userpass?>" class="form-email form-control" id="form-password-1">
				                        </div>
                                        <placeholder=<?=$passwordincorrect?> <br>
                                        <placeholder=<?=$emailexcits?> <br>
                                        <placeholder=<?=$Userhavebeen?> <br>
				                        <button type="submit" class="btn text-light colorbtn HOVERBT mx-2 my-2 ">Save Changes !</button>
				                    </form>
			                    </div>
                        	</div>
                        	
                        </div>

  </div>
</section>
                      