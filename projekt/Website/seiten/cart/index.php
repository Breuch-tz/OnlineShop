<?php
    require_once '../connection.php';
    SESSION_START();

    //id generieren
    $cartItems = 0;
    $userId = random_int(0,time());
    // $userId = random_int(0,time());
   
    // session_unset();
    // session_destroy();
    include_once "../../functions/cartFunctions/cartIndexSession.php";
    setcookie('userId',$userId,1000000);
    // session_unset();
    // session_destroy();

    //url edit
    include_once "../../functions/cartFunctions/addToDatabase.php";
    
    //cart items über amount
    include_once "../../functions/cartFunctions/showCartAmount.php";
    
    // //cart items über row bzw. user id 
    // $sql3 ="SELECT userid FROM cart WHERE userid = $userId";
    // $cartResults = $conn->query($sql3);
    
    // if($stmt = $conn->prepare($sql3)){
    //     $stmt-> execute();
    //     $stmt->store_result();

    //  printf($stmt->num_rows);
    // };   
    // echo ", $userId";

    if(strpos($route,'/cart/add/')!==false){
    header("Location: http://localhost/projekt/Website/seiten/shop/shop.html");
    exit();
    }
?>