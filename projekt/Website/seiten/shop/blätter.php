<?php 
// session_start();
// session_unset();
// session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href=".css" />
  </head>
  <body>
    <?php 
      if ((isset($_POST["next"])== false) && (isset($_POST["prev"])== false)){
        $_SESSION["aktseite"] = 1;
        $_SESSION["anzseiten"] = ($AnzahlDatensaetze  = $result->num_rows)/8;
      };

      if (isset($_POST["next"])){
        if($_SESSION["aktseite"] < $_SESSION["anzseiten"]){
        $_SESSION["aktseite"] ++;
        }
      };

      if (isset($_POST["prev"])){
        if($_SESSION["aktseite"] > 1){
        $_SESSION["aktseite"] --;
        }
      };
      ?>

    
    
  </body>
</html>
