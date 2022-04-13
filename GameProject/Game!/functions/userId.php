<?php
$userId = random_int(0,time());
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
setcookie('userId',$userId,1000000);
echo $userId;
// session_unset();
// session_destroy();
?>