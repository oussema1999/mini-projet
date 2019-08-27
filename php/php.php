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
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$pass = $_POST['pass'];
$repass = $_POST['repass'];
//preparation requette
$req = "INSERT into util values(null,'$nom','$prenom','$email','$tel','$pass','$repass')";
//exec(requette) => insert , update , delete
//success => nbr de ligne inséré ( int )
//erreur => false ( boolean )

$result = $conn->exec($req);

//result
echo $result;
?>