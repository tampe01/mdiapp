<?php
$conn = mysqli_connect("localhost", "root", "", "test2");


$host='localhost';
$db = 'test2';
$username = 'root';
$password = '';

$dsn = "mysql:host=$host;dbname=$db";$username;$password;

// $table = "users";

try
{
    //Create a PostgreSQL database connection
      //$bd = new PDO ($dsn,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)) ;
        $bd = new PDO ("mysql:host=$host;dbname=$db",$username,$password ) ;

    //Display a message if connected to the PostgreSQL successfully
      if($bd)
      {
          echo "La connexion  a la base de " . htmlspecialchars('données') . " <strong>$db</strong> a reussie !";
      }

}
catch(PDOException $e)
{
//die('Erreur de connexion à la bd : '.$e->getMessage());
    die('Erreur de connexion '.htmlspecialchars('à'). 'la base de '.htmlspecialchars('données'). ' : '.$e->getMessage());

}


if (isset($_POST["importchamp"])){

$test = 1;
var_dump($test);
die();

}
?>