<?php
$servername= 'localhost';
$dbUsername= 'mega';
$dbPassword= 'admin';
$dbName= 'loginsystem';

$conn= mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die('Connection Fail: ' . mysqli_connect_error());
}else{
//    echo 'Conexion Exitosa';
}

//mysqli_close($conn);