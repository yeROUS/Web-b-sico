<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_adsi";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   
}
echo "Todo bien";
?>