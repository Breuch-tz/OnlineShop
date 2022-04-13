<?php
$sql ="SELECT SUM(amount) as summe FROM cart WHERE userid = $userId";
$cartamount =  $conn->query($sql);
$cartamount = mysqli_fetch_array($cartamount);
if($cartamount['summe']){
echo $cartamount['summe'];

}else{echo ("0");
};
?>