

<section class=" container-fluid  mx-0 pt-5 my-0">
<div class="row my-4 d-flex justify-content-center">
    <div class="bg-color1 mx-3 my-3 " style="width:24%; height:8px; ">. </div>
    <div class="bg-color1" style="width:34%;">
        <h2 class=" text-center  bgcol" style=" font-family: 'STEAK';  color: white;">MAIN DISHES</h2>
    </div>
    <div class="bg-color1 my-3 mx-3" style="width:24%; height:8px;">.</div>
</div>
<div class="row d-flex justify-content-center " >

      
<?php


foreach($steaks as $stake){
?>     
            <div class="col-12 col-md-3  my-4 mx-3 platehover" style="  float: left;  width: 250px;" >
                <form action=<?=base_url.'producto/sessions'?> method='post'>
                    <button type="submit" style=" all: unset;  cursor: pointer;">
                   
                    <input type="hidden" name="dishe" value=<?=$stake->getId();?>>
                        <div class="bg-color1 m-1">
                            <img class="fotocolumna" src="<?=base_url.$stake->getPicture()?>" alt="">
                            <div>
                            <div class="bg-color1" style="float: left; width: 80%;">
                            <h3 class="text-light  fa-center p-3 d-flex justify-content-center textsizePlates "   ><?=  $stake->getName() ?></h3>
                            </div>
                            <div style="float: left;  height: 55px; text-align: center; padding-top:14.5px; padding-left:2.5px; background-color:white; color:black; width:48.42px;  ">
                            <p style="text-align: center; "><?=  $stake->getPrice(); ?>€</p>
                            </div>
                            </div>
                
                         </div>
                         </button>
                </form>
                 
            </div>

            <?php
            
        }?>     

            
</div>
</section>


<section class=" container-fluid mx-0 px-0 py-0 my-0">
<div class="row my-5 d-flex justify-content-center">
    <div class="bg-color1 mx-3 my-3 " style="width:24%; height:8px; ">. </div>
    <div class="bg-color1" style="width:35%;">
        <h2 class=" text-center  bgcol" style=" font-family: 'STEAK';  color: white;">DRINKS</h2>
    </div>
    <div class="bg-color1 my-3 mx-3" style="width:24%; height:8px;">.</div>
</div>
<div class="row d-flex justify-content-center pb-5 " >
<?php
foreach($refreshes as $drink){
?>     
            <div class="col-12 col-md-3  my-4 mx-3 platehover" style="  float: left;  width: 250px;" >
                <form action=<?=base_url.'producto/sessions'?> method='post'>
                    <button type="submit" style=" all: unset;  cursor: pointer;">
                   
                    <input type="hidden" name="drink" value=<?=$drink->getId();?>>
                        <div class="bg-color1 m-1">
                            <img class="fotocolumna" src="<?=base_url.$drink->getPicture()?>" alt="" >
                            <div>
                            <div class="bg-color1" style="float: left; width: 80%;">
                            <h3 class="text-light  fa-center p-3 d-flex justify-content-center textsizePlates "   ><?=$drink->getName() ?></h3>
                            </div>
                            <div style="float: left;  height: 55px; text-align: center; padding-top:14.5px; padding-left:2.5px; background-color:white; color:black; width:48.42px;  ">
                            <p style="text-align: center; "><?=$drink->getPrice(); ?>€</p>
                            </div>
                            </div>
                
                         </div>
                         </button>
                </form>
                 
            </div>

            <?php
            
        }?>          
           
          
            
            
</div>
</section>


