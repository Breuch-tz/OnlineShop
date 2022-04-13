<?php

require_once 'blätter.php';
   $aktSeite = $_SESSION["aktseite"];
   $start = 0;
   $end = 800;


if($aktSeite>1){
   $start = ($aktSeite-1)*8;
};


   require_once 'filter.php';

   $sql = "SELECT * FROM produkte ORDER BY ID LIMIT $start,$end";
   $result = $conn->query($sql);


?>