<?php
 if(isset($_COOKIE["userId"])){
    $userId=$_COOKIE["userId"]=$userId;
    // echo "Cookie:$userId,";
};
if(isset($_SESSION['userId'])){
    $userId = $_SESSION['userId'];
    // echo "true :$userId";
}else{
    $_SESSION['userId'] = $userId;
    // echo "Session:$userId,";
};
?>