<?php 

    if(isset($_POST['delete'])){
        $id = $_POST['delete'];
        
        $productselected = PRODUCTDAO::getProById($id);

        
        $foto = $productselected['ProPicture'];

        $productDelete = PRODUCTDAO::deleteProducteById($id);
        
        
    
        header("Location:".base_url."producto/mostrarProducteAdmin");
    }else{
        header("Location:".base_url."producto/index");
    }
    
?>