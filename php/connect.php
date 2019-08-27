<?php
session_start(); 
$serveur = "localhost";
$base = "tpbd";
$username = "root";
$pass = "";




$Link= mysqli_connect($serveur,$username,$pass);
mysqli_select_db($Link,$base);

if(isset($_POST['email'])){
    $email=$_POST['email'];
    $password=$_POST['pass'];
    
    $sql="select * from util where email='".$email."'AND password='".$password."' limit 1 ";
$result=mysqli_query($Link,$sql);

if(mysqli_num_rows($result)==1){
    echo "you have successfully logged in"; 
        header('location:profile.html');
   
}
else{
    echo" You have entered incorrect password"; 
    exit(); 
}


}


?>