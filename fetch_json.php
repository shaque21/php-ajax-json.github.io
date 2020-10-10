<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mvc";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname) OR die("Connection Failed.");
//when want to fatch particular data
//$sql = "SELECT * FROM info WHERE id = {$_POST['id']}";
$sql = "SELECT * FROM info";
$result = mysqli_query($conn, $sql) OR die("Query Failed.");
$output = mysqli_fetch_all($result,MYSQLI_ASSOC);
echo json_encode($output);
 ?>