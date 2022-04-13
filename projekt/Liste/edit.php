<?php
	$conn = mysqli_connect("127.0.0.1","root","","produktliste");
  include('insertrows.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"SELECT * FROM `produkte` WHERE ID='$id'");
	$row=mysqli_fetch_array($query);
  
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Row</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
	<h2>Edit</h2>
	<form action="" 
        method="post"
        autocomplete="off"
        enctype="multipart/form-data">
      <div>
        <input type="text" value="<?php echo $row['seriennummer']; ?>" placeholder="Seriennummer" name="seriennummer_edit" /><a href="">snum</a>
      </div>
      <div> <input type="text" value="<?php echo $row['produkt']; ?>" placeholder="produkt" name="produkt_edit" /><a href="">produkt</a></div>
      <div>
        <input type="text" value="<?php echo $row['preis']; ?>" placeholder="preis" name="preis_edit" step=".01" /><a href="">preis</a>
      </div>
      <div>
        <textarea id="descr" value="<?php echo $row['beschreibung']; ?>" name="beschreibung_edit"><?php echo $row['beschreibung']; ?></textarea><a href="">beschr</a>
      </div>
      <div>
        <select  placeholder="kategorie" name="kategorie_edit" id="kat">
          <option value="<?php echo $row['kategorie']; ?>"><?php echo $row['kategorie']; ?></option>
          <option value="Uhren">Uhren</option>
          <option value="Ketten">b</option>
          <option value="Zubehör">Zubehör</option>
        </select>
        <a href="">kat</a>
      </div>
      <div>
        <select  placeholder="sorte" name="sorte_edit">
          <option value="<?php echo $row['sorte']; ?>"><?php echo $row['sorte']; ?></option>
          <option value="Gold">Gold</option>
          <option value="Silber">Silber</option>
          <option value="Platin">Platin</option>
        </select>
        <a href="">typ</a>
      </div>
      <div>
        <input value="" type="file" name="image_edit" ></input> <br>
        <input value="" type="file" name="image_edit2" ></input>
      </div>
      <div><input value="Submit" type="submit" name="submit_edit"/>
		</div>
    </form>
</body>
</html>

<?php
	$conn = mysqli_connect("127.0.0.1","root","","produktliste");
	
	
	if(isset($_POST['submit_edit'])){
	


    if(!empty($_FILES['image_edit']["tmp_name"])&&!empty($_FILES['image_edit2']["tmp_name"])){
      $pic = addslashes(file_get_contents($_FILES['image_edit']["tmp_name"]));
      $pic2 = addslashes(file_get_contents($_FILES['image_edit2']["tmp_name"]));
    }else{
    $pic = addslashes($row['bild']);
    $pic2 = addslashes($row['bild2']);
    };
	
	$seriennummer=$_POST['seriennummer_edit'];
	$produkt=$_POST['produkt_edit'];
	$preis=$_POST['preis_edit'];
  if(!strpos($preis,'€')){
            $preis1 = "$preis €";
            $preis = str_replace(" ","",$preis1);
  }
	$beschreibung=$_POST['beschreibung_edit'];
	$kategorie=$_POST['kategorie_edit'];
	$sorte=$_POST['sorte_edit'];

	

	$query = "UPDATE produkte SET  seriennummer='$seriennummer',produkt='$produkt',preis='$preis',beschreibung='$beschreibung',kategorie='$kategorie',sorte='$sorte',bild='$pic',bild2='$pic2' WHERE ID='$id'";
	
	$run = mysqli_query($conn,$query);
	if($run){
		header('Location: http://localhost/projekt/Liste/index.html'); exit; 
	}else{
		echo "Error deleting record: " . $conn->error;;
	}

	};

?>
