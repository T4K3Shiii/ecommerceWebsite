<?php
$host="localhost";
$port=3306;
$user="root";
$password="";
$db="clothing";
$con=new mysqli($host,$user,$password,$db,$port);
if($con->connect_errno){
    echo"Connection fail";
}
