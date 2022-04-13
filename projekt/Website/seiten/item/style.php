<!DOCTYPE html>
<html>
  <head>
    <title>Edit Row</title>
    <style>
      .parent {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(3, 1fr);
        grid-column-gap: 0px;
        grid-row-gap: 0px;
      }
      .div1 {
        grid-area: 1 / 1 / 2 / 2;
      }
      .div2 {
        grid-area: 2 / 1 / 3 / 2;
      }
      .div3 {
        grid-area: 3 / 1 / 4 / 2;
      }
      .div4 {
        grid-area: 1 / 2 / 4 / 3;
      }
      .div5 {
        grid-area: 1 / 3 / 4 / 5;
      }
    </style>
  </head>
  <body>
    <div class="parent">
      <div class="div1">
        <?php echo '<img style="width:50px" src="data:bild/jpeg;base64,'.base64_encode( $row['bild'] ).'"/>';
        ?>
      </div>
      <div class="div2">
        <?php echo '<img style="width:50px" src="data:bild/jpeg;base64,'.base64_encode( $row['bild2'] ).'"/>';
        ?>
      </div>
      <div class="div3"></div>
      <div class="div4"></div>
      <div class="div5">
        <?php echo $row['ID']; ?>
        <?php echo $row['seriennummer']; ?>
        <?php echo $row['preis']; ?>
        <?php echo $row['produkt']; ?>
        <?php echo $row['beschreibung']; ?>
        <?php echo $row['kategorie']; ?>
        <?php echo $row['sorte']; ?>
      </div>
    </div>
  </body>
</html>
