
<section class="">

    <div class="pt-5 pb-5 d-none d-sm-block ">
   
    <table class="table bg-color1 text-white center" style="width:65%;">
        <thead>
            <tr >
            
        <th scope="col" class="text-center " >ITEM</th>
            <th scope="col">PRICE</th>
            <th scope="col">QUANTITY</th>
            <th scope="col">TOTAL</th>
            <th scope="col">REMOVE</th>
            </tr>
        </thead>
        <tbody>
       
            <?php
            if ($orderCounts>0) {
                $pos = 0;
                foreach ($_SESSION['compra'] as $order) { ?>
                 <form action=<?=base_url.'producto/sessions'?> method='post'>
                     <tr>
                 <td>
                    <div class="d-flex justify-content-center mx-0 my-0 px-0 py-0 ">
                        <div class="col-12   my-0 mx-0 pt-3 pb-1" style="  float: left;  width: 200px;">
                            <img class="fotocolumna" src="<?=base_url.$order->getPicture()?>" alt="">
                        </div>
                        <div class="col-12   my-4 mx-0 pt-4 " style="  float: left; width: 250px">
                        <h3 class="text-light  p-3 d-flex justify-content-center textsizePlatescarrito "><?=$order->getName() ?></h3>
                        </div>
                    </div>
                    </td>
                    <td>
                        <div class="col-12  pt-5  " style="  float: left;   ">
                            
                            <div>
                                <h3 class="text-light  p-2 " style=" float: left;"><?=$order->getPrice() ?></h3>
                            </div>
                            
                        </div>
                    </td>
                    <td>
                        <div class="col-12  pt-5 px-0" style="  float: left; ">
                            <div class="pt-2">
                            <div class="">
                            
                            <input type="hidden" name="pos" value=<?=$pos?>>
                                <p class=" btuncarrito  text-center  " style=" float: left;   padding-top: 0px;"">
                                            <button class=" " type="submit" name='Del' style=" all: unset;  cursor: pointer;">-</button >
                                </p>
                            </div>
                            <div>
                                <h3 class="text-light   " style=" float: left;  margin-right: 6%; margin-left: 6%; "><?=$order->getQuantity() ?></h3>
                            </div>
                            <div>
                            
                                <p class=" btuncarrito  text-center  " style=" float: left; ">
                                <button class=" " type="submit" name='Add' style=" all: unset;  cursor: pointer;">+</button >
                                </p>
                            
                            </div>
                            </div>
                            
                        </div>
                    </td>
                    
                    <td>
                        <div class="col-12  pt-5 " style="  float: left;">
                            
                            <div>
                                <h3 class="text-light  p-2 " style=" float: left; "><?=$order->calculatePrice()?></h3>
                            </div>
                            
                        </div>
                    </td>
                    <td>
                            <div class="d-flex justify-content-center pt-5" style=" ">   
                                <p class="p-2  " style="">
                                <button class=" " type="submit" name='remove' style=" all: unset;  cursor: pointer;"><img src=<?=base_url."assets/images/remove.png"?> alt="" style="width:27px; height: 27px;"></button >
                                </p>
                            </div>
                    </td>
                </tr>
               
                </form>
                <?php $pos++;}?>
                <tr>
                    <td colspan="5">
                    <div class="text-light text-center  pr-5 mr-5" >
                    <h3 class="text-light text-center mx-4 my-5 " style=" float: right;"><?= CalculateTotalPrice::calculateTPrice($_SESSION['compra'])?></h3>
                    <h3 class="text-light text-center mx-4 my-5 " style=" float: right;">Total</h3>
                    </div>
                    
                    </td>   
                </tr>

                <form action=<?=base_url.'producto/cockies'?> method='post'>
                <input type="hidden" name="finishOrdering" value="true">
                <tr>
                <td colspan="5">
                <button type="submit" style=" all: unset;  cursor: pointer; float: right;">
                
                <p class="mx-4 my-5 text-center s" style="float: right;">
                        <a class="btn colorbtn " role="button" id="whitebutton">CHECK OUT</a>
                </p>
                </button>
                </form>
                <p class="mx-4 my-5 btun text-center s" style="float: right;">
                        <a class="btn colorbtn " href=<?=base_url."producto/menu"?> role="button">CONTINUE SHOPING</a>
                </p>
               
                </td>    
                </tr>

               
                
                <?php 
            }else{?>
                <tr><td colspan="5"><h3 class="text-light  p-3 d-flex justify-content-center textsizePlatescarritoVacio pt-5 pb-0" style="height: 300px;">YOU DID NOT SELECT ANY DISHES TO BUY</h3></td> <tr>
                    <?php
            } 
            ?>
           
           
           
        </tbody>
        </table>
    </div>

    <div class="mt-5 mb-5 bg-color1 text-white center d-sm-none">
        <div class="text-center cartTitleFont"> <h2 style="font-size:50px">MY CART</h2></div>
    <?php
    
            if ($orderCounts>0) {
                $pos = 0;
                foreach ($_SESSION['compra'] as $order) { ?>
                 <form action=<?=base_url.'producto/sessions'?>method='post' style="b">
                 
                 <hr />
                    
                     
                    <div style="">
                        <h3 class="text-light   textsizePlatescarrito " style="font-size:20px"><?=$order->getName() ?></h3>
                    </div>
                    <div class="center mb-2" style="  width: 200px;  ">  
                        <img class="fotocolumna" src="<?=base_url.$order->getPicture() ?>" alt="">


                            
                            <div class="center " style=" width:160px; ">
                                <div style="  float: left; margin-right:20%;">
                                    <h5 style="font-size:40px; margin-top:13%;"><?=$order->getPrice() ?></h5>
                                </div>

                                <div style="  float: left; ">
                                 <input type="hidden" name="pos" value=<?=$pos?>>
                                    <button  type="submit" name='Del' style=" all: unset;  cursor: pointer;font-size:40px;"><b>-</b></button >
                                </div>
                                <div style="  float: left;  ">
                                    <h5 style="font-size:40px; margin-top:40%; margin-left:20%;margin-right:23%;"><?=$order->getQuantity() ?></h5>
                                </div>

                                <div style="  ">
                                    <button  type="submit" name='Add' style=" all: unset;  cursor: pointer; font-size:40px; "><b>+</b></button >
                                </div>
                            </div>
                            <div style=" margin-left:18%; ">
                                <h5 style=" font-size:30px;">Total: <?=$order->calculatePrice()?></h5>
                            </div>


                            <div style=" margin-left:35%; ">
                                <button  type="submit" name='remove' style=" all: unset;  cursor: pointer;"><img src=<?=base_url."assets\images\remove.png"?> alt="" style="width:40px; height: 40px;"></button >
                            </div>

                    


                    </div>

                        
                           
                           
                      
                    <hr />
                    
                </form>
                <?php $pos++;}?>
                <div class=" pb-3 pt-3  d-sm-none">
                <form action=<?=base_url.'producto/cockies'?> method='post'>
                <input type="hidden" name="finishOrdering" value="true">
                <button type="submit" style=" all: unset;  cursor: pointer; float: right;">
                        
                        <p class=" text-center " style=" margin-right:10%; width:150px;">
                                <a class="btn colorbtn " role="button" id="whitebutton">CHECK OUT</a>
                        </p>
                </button>
                </form>
                        <p class=" btun text-center " style=" ">
                                <a class="btn colorbtn " href="producto/menu" role="button">CONTINUE SHOPING</a>
                        </p>
               
                </div>
                
                <?php 
            }else{?>
                <tr><td colspan="5"><h3 class="text-light  p-3 d-flex justify-content-center textsizePlatescarritoVacio pt-5 pb-0" style="height: 300px;">YOU DID NOT SELECT ANY DISHES TO BUY</h3></td> <tr>
                    <?php
            } 
            ?>
    </div> 
</section>


