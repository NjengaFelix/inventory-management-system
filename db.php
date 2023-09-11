<?php
//db connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_inventory_management_system";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}