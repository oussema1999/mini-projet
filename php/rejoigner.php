<?php
function connect(){
    $serveur = "localhost";
    $base = "tpbd";
    $username = "root";
    $pass = "";
    try{
        $dataBase = new PDO("mysql:host=$serveur;dbname=$base",$username,$pass);
        return $dataBase;
    }catch(PDOException $e){
        die("erreur de connexion : ".$e->getMessage());
    }
}

//connexion bd
$conn = connect();


$email = $_POST['email'];
$pass = $_POST['pass'];
$adress = $_POST['adress'];
$description = $_POST['description'];
$city = $_POST['city'];

//preparation requette
$req = "INSERT into equipe values(null,'$email','$pass','$adress','$description','$city')";
//exec(requette) => insert , update , delete
//success => nbr de ligne inséré ( int )
//erreur => false ( boolean )

$result = $conn->exec($req);

//result
echo $result;
?>