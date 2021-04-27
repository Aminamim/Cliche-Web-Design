<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cliche";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_GET['name'];
$mail = $_GET['mail'];
$psw = $_GET['psw'];
$phone = $_GET['phone'];
$address = $_GET['address'];
$privilage = 0;

$sql = "SELECT userId FROM user WHERE mail = '$mail' LIMIT 1" ;
	$check_query = mysqli_query($conn,$sql);
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 0){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Email Address is already in use. Try Another email address</b>
			</div>
		";
		header("refresh:2;url=signup.php");
	} else {

$sql = "INSERT INTO user (userId, name, mail, psw, phone, privilage, address) VALUES (NULL,'$name', '$mail', '$psw', '$phone', '$privilage', '$address')";

if (mysqli_query($conn, $sql)) {
      
      mysqli_close($conn);
	  header("refresh:0;url=root.php");
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    mysqli_close($conn);
    	  header("refresh:3;url=root.php");

    
}
}
 ?>