<?php
$servername ="localhost";
$username="root";
$password="";
$dbName="phptuto";

$conn =new mysqli($servername, $username, $password, $dbName);

if($conn->connect_error){
    die("failed" . $conn->connect_error);
    
}

// $conn=mysqli_connect(
//     $servername,
//     $username,
//     $password,
//     $dbName
// );
// if ($conn) {
//     echo "connection successful";
// }
// else{
//     echo "connection unsuccessful" .mysqli_connect_error();
// }