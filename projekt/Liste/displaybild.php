<?php
	$conn = mysqli_connect("127.0.0.1","root","","produktliste");
    include('insertrows.php');
    

	$id=$_GET['id'];
    
	
 
    $sql = "SELECT * FROM produkte WHERE id = $id";
    $sth = $conn->query($sql);
    $result=mysqli_fetch_array($sth);
    
    echo '<img style="width:450px" src="data:bild/jpeg;base64,'.base64_encode( $result['bild'] ).'"/>';
    echo '<img style="width:450px" src="data:bild/jpeg;base64,'.base64_encode( $result['bild2'] ).'"/>';

?>
