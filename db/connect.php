<?php
$dsn="mysql:host=localhost;dbname=bookdata";
$username="root";
$password="";
try{
    $obj= new PDO($dsn,$username,$password);
   
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>