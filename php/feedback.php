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

$nom = $_POST['nom'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
//preparation requette
$req = "INSERT into feedback values(null,'$nom','$email','$feedback')";
//exec(requette) => insert , update , delete
//success => nbr de ligne inséré ( int )
//erreur => false ( boolean )

$result = $conn->exec($req);

//result
echo $result;

?>