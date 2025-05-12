<?php 
$host="localhost";
$username="root";
$password="";
$database="discuss";

$conection =new mysqli($host,$username,$password,$database);

if($conection ->connect_error){
 die("not connected with db".$conection ->connect_error);
}
echo "db connected";
?>