
<?php
$conn = mysqli_connect("127.0.0.1","root","","produktliste");


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM cart";

if ($conn->query($sql) === TRUE) {
  // header('Location:http://localhost/projekt/Website/seiten/cart/cart.html');
} else {
  echo "Error";
}

$conn->close();


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../header.css" />
    <link rel="stylesheet" href="../body.css" />
    <link rel="stylesheet" href="../footer.css" />
    <link rel="stylesheet" href="cart.css" />

    <title>Warenkorb</title>
  </head>
  <body id="body">
    <?php include "../header.html" ?>
    <div id="wrapper">
      <main>
        <div id="content">
          <div class="innertube">
            <div class="content-grid">
              <div class="gridBlockA">
                <div class="contentdiv1">
                  
                  <ul id="content1">
                    <?php include "cartItems.php" ?> <br>
                    <?php echo"Danke für Ihren Einkauf!🙂" ?>

                  </ul>
                </div>
                <div class="contentdiv1">
                  <div id="content1">
                    <div id="summe">
                      <?php include "../../functions/cartFunctions/summe.php"  ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="gridBlockB">
                <div class="contentdiv2">
                  <div class="summe-bestellen">
                    <div class="summe">
                      <div>
                      <div><?php include "../../functions/cartFunctions/summe.php"?></div>
                      <div class="bestellen"><?php include "bestellen.php"?></div>
                    </div>                  
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    <footer id="footer">
      <div class="innertube">
        <p>Footer...</p>
      </div>
    </footer>
  </body>
</html>