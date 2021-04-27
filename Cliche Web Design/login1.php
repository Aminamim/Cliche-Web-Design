<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cliche";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ( isset($_POST['name']) )
    $name = $_POST['name'];
if ( isset($_POST['psw']) )
    $psw = $_POST['psw'];
    

    $qry = "SELECT * FROM user WHERE name='$name' AND psw='$psw'";

    $query = mysqli_query($conn, $qry);
    $rows = mysqli_num_rows($query);


    if($rows){

        $row = $query -> fetch_assoc();
        
         session_start();

        $_SESSION['id'] = $row['userId'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['mail'] = $row['mail'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['privilage'] = $row['privilage'];
        
    
       $conn->close();

       echo "Hello " . $_SESSION['name'] . "!";

      header("Refresh:0; url=root.php");        
    }else{
        $conn->close();
        echo "Some problem occurred while logging. Try again.";

    }

?>
