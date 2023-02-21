<section class="vh-100 my-5 pb-5" >
  <div class="container h-100">
  <div class="w-100 p-3 d-flex justify-content-center  text-white"  style="font-family: 'trebuc';">
                        	
                        	<div class="col-xl-9 bg-dark px-5 py-5 ">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Create Product</h3>
	                            		<p></p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="registration-form" enctype="multipart/form-data">
                                   
                                     <div class="form-group">
				                    		<label class="sr-only" for="form-name">ID</label>
				                        	<input type="number" name="form-IdProd" value="<?=$productMaxIdNEW?>" class="form-first-name form-control" id="form-IdProd" readonly="true">
                                            
				                        </div>

				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-name">Name</label>
				                        	<input type="text" name="form-name" value="" class="form-first-name form-control" id="form-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Quantity</label>
				                        	<input type="number" name="form-quantity" value="1"  class="form-last-name form-control" id="form-quantity" readonly="true">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">Price</label>
				                        	<input type="number" name="form-price" value=""  class=" form-control" id="form-price">
				                        </div>
										
				                        <div class="form-group">
                                             <label for="category" class="col-md-2 col-form-label">Category</label>
                                           
                                            <select class="form-select" name="form-category" id="form-category" aria-label="category">
                                                <option value="1" >Main Dish</option>
                                                <option value="2" >Drink</option>
                                            </select>
                                            
				                        </div>

                                        <div class="form-group">
				                        	<label class="sr-only" for="">Upload Picture</label>
                                            <input class="form-control" type="file" id="form-foto" name="form-foto"  required>
				                        </div>

										
				                       
				                        <button type="submit" class="btn text-light colorbtn HOVERBT mx-2 my-2 ">Save Changes !</button>
				                    </form>
			                    </div>
                        	</div>
                        	
                        </div>

  </div>
</section>
                      