<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cliche";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$pId = $_GET['pId'];
$userId = $_GET['userId'];
$name = $_GET['name'];
$phone = $_GET['phone'];
$address = $_GET['address'];
$delivery = $_GET['delivery'];


$sql = "INSERT INTO record (orderId, pId, userId, name, phone, address, delivery) VALUES (NULL,'$pId', '$userId', '$name', '$phone','$address', '$delivery')";

if (mysqli_query($conn, $sql)) {
      
      mysqli_close($conn);
	  header("refresh:0;url=products.php");
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    mysqli_close($conn);
}

 ?>