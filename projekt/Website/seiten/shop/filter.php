<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   

    <title>Website</title>
  </head>
  <body id="body">
    <div>
        <form method="post" onchange="submit()">
          <select name="filter">
            <option value="*">Alle Artikel</option>
            <option value="Uhren">Uhren</option>
            <option value="Ketten">Ketten</option>
            <option value="Zubehör">Zubehör</option>
          </select>
        </form>
      </div>
  </body>
</html>

<?php
function submit(){
  $x = $_GET['filter'];
  echo $x;
}

?>




