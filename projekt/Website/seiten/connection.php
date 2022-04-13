<?php
$conn = mysqli_connect("127.0.0.1","root","","produktliste");
$sql = "SELECT * FROM produkte";
$result = $conn->query($sql);
?>