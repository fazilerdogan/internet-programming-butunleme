<?php

try
{
    $db=new PDO("mysql:host=localhost; dbname=ks_sport; charset=utf8",'root','');
    //echo "başarılı";
}
catch (Exception $e)
{
    echo  $e->getMessage();
}

$servername="localhost";
$username="root";
$password="";
$dbname="ks_sport";

$conn=new mysqli($servername,$username,$password,$dbname);
$new=mysqli_set_charset($conn,"utf8");



?>