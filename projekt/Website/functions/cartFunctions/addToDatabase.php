<?php
$url = $_SERVER['REQUEST_URI'];
    $indexPHPPosition = strpos($url,'index.php');
    $route = substr($url,$indexPHPPosition);
    $route = str_replace('index.php','',$route);
    // var_dump($route);
    
     
    if(strpos($route,'/cart/add/')!==false){
        $routeParts = explode("/",$route);
        $productId = (int)$routeParts[3];
       
        $sql1 = "INSERT INTO cart (`userid`,`product_id`) VALUES ('$userId','$productId')";
        $run1 = mysqli_query($conn,$sql1);
        
       
        $sql2 = "UPDATE cart SET amount = amount + 1 WHERE userid='$userId' AND product_id = $productId";
	    $run2 = mysqli_query($conn,$sql2);
    }


?>