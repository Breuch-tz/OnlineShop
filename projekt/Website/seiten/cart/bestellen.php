<?php
 $sql = "SELECT * from produkte JOIN cart on produkte.ID = cart.product_id where userid =$userId";
 $result = $conn->query($sql);

    
 $desc = array();

 if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         $productId = $row["product_id"];
 
         
            
             $prd=$row["produkt"];           
             $preis=$row["preis"];             
             $menge=$row["amount"];
        array_push($desc,$obj=array("\nProdukt:$prd","Preis:$preis","Menge:$menge"));
        
         };
        
        };
?>



<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices -->
  </head>

  <body>
    <!-- Include the PayPal JavaScript SDK; replace "test" with your own sandbox Business account app client ID -->
    <script src="https://www.paypal.com/sdk/js?client-id=ASAphLQPIkef7BFBvt2bMkZT04FxWvpiPTK_8wP4lkObAUTGQYLQv9-e1efJfsDeCM76SMf9oC3D2aAy&currency=EUR"></script>

    <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>

    <script>
  var valuename = (window.sessionStorage.getItem(1));

  var prdID = <?php echo json_encode($desc);?>;
  prdID = prdID.toString();
  console.log(prdID)

window.sessionStorage.setItem("prdID", prdID);





      paypal.Buttons({

        // Sets up the transaction when a payment button is clicked
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
              "description":prdID,
              "amount": {"currency_code":"EUR","value": valuename}
            }]
          });
          
        },
        

        // Finalize the transaction after payer approval
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                var transaction = orderData.purchase_units[0].payments.captures[0];
                location="http://localhost/projekt/Website/seiten/cart/thank_you.php";
          });
        }
      }).render('#paypal-button-container');

    </script>
  </body>
</html>