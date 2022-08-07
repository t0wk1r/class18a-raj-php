<?php
session_start();

if(isset($_SESSION["done"])){
    header('location: admin.php');
}

//database
define('EMAIL','abc@gmail.com');
define('PASSWORD','1234');

if(isset($_POST["submit"])){

    $email = $_POST['emailaddress'];
    $pass = $_POST['pass'];

    if( $email == EMAIL && $pass == PASSWORD){
        $_SESSION['done']='';
        header('location: admin.php');
    }else{
        echo "user or password not match";
    } 
}
?>
<form action="" method="post">
    <input type="email" name="emailaddress" placeholder="Email Address"><br><br>
    <input type="password" name="pass" placeholder="Password"><br><br>
    <input type="submit" name="submit" value="LOG IN" >
</form>