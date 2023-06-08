<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "yewo";

$conn = mysqli_connect($servername, $username, $password,$database_name);

if (!$conn) {
  die("Connection failed: " . $conn);
}
echo "Connected successfully";
echo "<br>";
$Name =  $_REQUEST['Name'];
$Email = $_REQUEST['Email'];
$reportproblem = $_REQUEST['reportproblem'];
 

$sql = "INSERT INTO indeks  VALUES ('$Name','$Email','$reportproblem')";
 
if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully;
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
?>