<?php
SESSION_START();
$conn = mysqli_connect("127.0.0.1","root","","game!");
$query=mysqli_query($conn,"SELECT * FROM `game!`");

if(isset($_POST["submit"])){


    if(!empty($_POST['uname']) && !empty($_POST['pw']) && !empty($_POST['repeatpw']) && !empty($_POST['email'])){

        $userId =  $_SESSION['userId'];
        $name = $_POST['uname'];
        $email = $_POST['email'];
        $pw = $_POST['pw'];
        $repeatPw = $_POST['repeatpw'];

        $query = "INSERT INTO `game!`(`user_Id`,`user_name`,`user_email`,`user_password`) VALUES ('$userId','$name','$email','$pw')";

        $run = mysqli_query($conn,$query);

        if($run){
            header('Location: http://localhost/GameProject/Game!/UI/UI.html'); exit; 
        }else{
            echo "not sucessfully". $conn->error;
        }
    }else{
        echo "all fields required";
    }

}


?>