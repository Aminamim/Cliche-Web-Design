<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cliche";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$title = $_GET['title'];
$price = $_GET['price'];
$image = $_GET['image'];
$dscrp = $_GET['dscrp'];
$catagory = $_GET['catagory'];
$recepient = $_GET['recepient'];
$occasion = $_GET['occasion'];


$sql = "INSERT INTO products (pId, title, price, image, dscrp, catagory, recepient, occasion) 
        VALUES (NULL,'$title', '$price', '$image', '$dscrp', '$catagory', '$recepient', '$occasion')";

if (mysqli_query($conn, $sql)) {
      
      mysqli_close($conn);
  header("refresh:0;url=products.php");
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    mysqli_close($conn);
}

 ?>