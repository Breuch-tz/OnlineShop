<?php
    $conn = mysqli_connect("127.0.0.1","root","","produktliste");

    if(isset($_POST['submit'])){

        if(!empty($_POST['snum']) && !empty($_POST['produkt']) && !empty($_POST['preis']) && !empty($_POST['descr']) && !empty($_POST['kat']) && !empty($_POST['type'])){

            
        
            $snum = $_POST['snum'];
            $produkt = $_POST['produkt'];
            $preis1 = $_POST['preis'];
            $preis2 = "$preis1 €";
            $preis = str_replace(" ","",$preis2);
            $descr = $_POST['descr'];
            $kat = $_POST['kat'];
            $type = $_POST['type'];

            
            

            if(!empty($_FILES['image']["tmp_name"])){
                $pic = addslashes(file_get_contents($_FILES['image']["tmp_name"]));
            }else{
            };

            if(!empty($_FILES['image2']["tmp_name"])){
                $pic2 = addslashes(file_get_contents($_FILES['image2']["tmp_name"])); 
            }else{
            };


            $query = "INSERT INTO `produkte`(`seriennummer`,`produkt`,`preis`,`beschreibung`,`kategorie`,`sorte`,`bild`,`bild2`) VALUES ('$snum','$produkt','$preis','$descr','$kat','$type','$pic','$pic2')";

            $run = mysqli_query($conn,$query);
            if($run){
                header('Location: http://localhost/projekt/Liste/index.html'); exit; 
            }else{
                echo "not sucessfully";

            }
        }else{
            echo "all fields required";
        }
        
    }
    
?>