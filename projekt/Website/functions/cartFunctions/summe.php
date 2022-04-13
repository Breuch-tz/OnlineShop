<?php

    require_once '../connection.php';
    require_once '../../seiten/cart/cartItems.php';

    


    $sql = "SELECT * from produkte JOIN cart on produkte.ID = cart.product_id Where userid=$userId";
    $result = $conn->query($sql);

   
    if ($result->num_rows > 0) {
        // output data of each row
        
    
        $currvalue = 0;
        $amtvalue = 0;
        while($row = $result->fetch_assoc()) {
        $productId = $row["product_id"];
            $preis = $row["preis"];
            $amount = $row["amount"];

            if(strpos($preis,",")!==false){
                $preis = str_replace(",",".",$preis);
                $preis = $preis;
                };
            if(strpos($preis,'€')){
            $preis = str_replace("€","",$preis);
            }
            $value = $preis * $amount;


            $currvalue += $value;      
            $currvalue = strval($currvalue);
            $value = "$currvalue €";
            $value = str_replace(" ","",$value);
                
            

            $amtvalue += $amount;
            if(strpos($value,".")!==false){
                $value = str_replace(".",",",$value);
                $value = $value;
            };
            
        }
          echo "Summe ($amtvalue Artikel):$value";
          $_SESSION["value"] = $value;
          
        
    }
    else {
        echo "Summe (0 Artikel):  0€";
    }
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<script>
var valuename = <?php echo json_encode($currvalue);?>;
window.sessionStorage.removeItem(1);
window.sessionStorage.setItem(1, valuename);


</script>
</html>