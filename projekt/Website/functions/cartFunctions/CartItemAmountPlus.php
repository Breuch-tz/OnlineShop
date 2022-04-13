<?php
$conn = mysqli_connect("127.0.0.1","root","","produktliste");



$sql = "SELECT * from cart";
$ID = $_GET['id'];
$sql = "SELECT * from cart WHERE ID=$ID";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$userId = $row['userid'];
$amount = $row['amount'];

$ID = $_GET['id'];


$sql = "UPDATE cart SET amount = $amount + 1 WHERE ID=$ID AND userid = $userId ";

if ($conn->query($sql) === TRUE) {
   header("Location: ../../seiten/cart/cart.html");
} else {
    echo "Error : " . $conn->error;
}

?>