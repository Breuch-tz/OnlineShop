<?php
SESSION_START();
$userId = $_SESSION['userId'];
$conn = mysqli_connect("127.0.0.1","root","","game!");
$query=mysqli_query($conn,"SELECT * FROM `game!` WHERE user_Id='$userId'");
$row=mysqli_fetch_array($query);


        
    $name = $row['user_name'];
    $password =$row['user_password'];



if(isset($_POST["submit"])){
   
    if($_POST['uname']==$name && $_POST['pw']==$password){
        unset($_SESSION['loginError']);
        header('Location: http://localhost/GameProject/Game!/UI/UI.html'); exit; 

    }else{
        $errorMsg = "Wrong username or password";
        $errorMsg=$_SESSION["loginError"]=$errorMsg;
        header('Location: http://localhost/GameProject/Game!/Form/loginForm/login.html'); exit;
    };

};


?>