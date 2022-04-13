<?php
    require_once '../connection.php';
    require_once 'style.php';
    
   
    
    $sql = "SELECT * from produkte JOIN cart on produkte.ID = cart.product_id where userid =$userId";
    $result = $conn->query($sql);
   
    
   

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $productId = $row["product_id"];
            
            echo 
            
            
            "<div class=listitem><div class=div1>" .  '<img id=im src="data:bild/jpeg;base64,'.base64_encode( $row["bild"] ).'"/>'. 
            "</div><div class=div2><p>" . $row["produkt"]. 
            "</p></div><div class=div3>Menge: ". $row["amount"]." <a class=itemPlus href='../../functions/cartFunctions/CartItemAmountPlus.php?id=$row[ID]'>➕</a> <a class=itemMinus href='../../functions/cartFunctions/CartItemAmountMinus.php?id=$row[ID]'>➖</a>
            <a class=itemLöschen href='../../functions/cartFunctions/deleteCartItem.php?id=$row[ID]'>Löschen</a>".
            "</div><div class=div4><p>" . $row["preis"].
            "</p></div></div>";

            


          
    
            };
           

        } else {
        echo "Ihr Einkaufswagen ist Leer";
        
    };

    //////////////

    ;
    
   
    
?>

