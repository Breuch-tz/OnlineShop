<?php
 // sql to delete a record
 $conn = mysqli_connect("127.0.0.1","root","","produktliste");
 $sql = "DELETE FROM produkte WHERE id='".$_GET['id']."' ";

 if ($conn->query($sql) === TRUE) {
    header("Location: index.html");
 } else {
     echo "Error deleting record: " . $conn->error;
 }

 $conn->close();

?>