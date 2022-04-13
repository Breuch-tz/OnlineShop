<?php
	$conn = mysqli_connect("127.0.0.1","root","","produktliste");
   
   require_once 'produkteProSeite.php';


   require_once 'style.php';
   


//////////////////////////////////////////////////////////////////



   if($result->num_rows>0){
      while($row=$result->fetch_assoc()){


         $preis = $row["preis"];
         if(strpos($preis,".")!==false){
         $preis = str_replace(".",",",$preis);
         $preis = $preis;
         };
          
          echo 
          "<a style=text-decoration:none href='../item/item.html?id=$row[ID]'><li id=item ><tr>" .
          '<img id=im src="data:bild/jpeg;base64,'.base64_encode( $row["bild"] ).'"/>'.
          "<div id=gridcontent></tr><p id=id>" .  $row["ID"]. 
          "</p><p id=sn>" . $row["seriennummer"]. 
          "</p><p id=pr>" . $preis.
          "</p><p id=pd>" . $row["produkt"].
          "</p><p id=be>" . $row["beschreibung"]. 
          "</p><p id=ka>" . $row["kategorie"].
          "</p><p id=so>" . $row["sorte"].
          "</p><a id=addToCart href='../cart/index.php/cart/add/$row[ID]'>Add to cart</a></div>";
          
         }
         
  }else{
   echo "Keine Produkte im Angebot";
  }
  
  $conn->close();
?>
