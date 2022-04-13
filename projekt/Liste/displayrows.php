<?php
    $conn = mysqli_connect("127.0.0.1","root","","produktliste");
    $sql = "SELECT * FROM produkte";
    $result = $conn->query($sql);
        
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            
            echo 
            "<tr><td>" . $row["ID"]. 
            "</td><td>" . $row["seriennummer"]. 
            "</td><td>" . $row["produkt"].
            "</td><td>" . $row["preis"]. 
            "</td><td><textarea>" . $row["beschreibung"]. 
            "</textarea></td><td>" . $row["kategorie"].
            "</td><td>" . $row["sorte"].
            "</td><td>" . "<a href='displaybild.php?id=$row[ID]'>bild</a>".
            "</td><td>" . "<a href='delete.php?id=$row[ID]'>delete</a>". 
            "</td><td>" . "<a href='edit.php?id=$row[ID]'>Edit</a>";
            }
           
    }
    
   
    $conn->close();
?>