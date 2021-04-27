<!DOCTYPE html>
<?php 
session_start();
$pId = $_GET['pId'];

 ?>
<html>
<head>
  <title>Cliché</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="buy.css">
<meta charset="utf-8">
</head>

<div class="icon-bar">    
    <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
    <a href="https://www.twitter.com"><i class="fa fa-twitter-square"></i></a>
    <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
    <a href="https://www.pinterest.com"><i class="fa fa-pinterest"></i></a>
  </div>

<nav class="navbar navbar-inverse navbar-fixed-top" style="background-image: linear-gradient(to right, black, #b71616);height: 10%;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="root.php"><img src="cliche_logo.png" style="width: 150px;height: 60px;"></a>
    </div>

     <form class="navbar-form navbar-left" action="products.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search Products" name="keyword">
      </div>
      <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span> GO!</button>
    </form>

  <ul class="nav navbar-nav navbar-right">
<?php if(isset($_SESSION["id"])){ ?>
    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">
      <span class="glyphicon glyphicon-user"style="font-size: 30px;"></span>
        <strong> Hello, <?php echo $_SESSION['name']."!"; ?></strong></a>
       <ul class="dropdown-menu" style="width:200px; background-image: linear-gradient(to right, black, #b71616);border-radius: 25px 25px 25px 25px;">
                  <ul  style=" font-size: 20px;text-align: center;padding: 30px">
                    <?php if($_SESSION["privilage"] == 1){ ?>
                      <li><a href="adding.php" style="color: white;">Add Product</a></li>
                    <?php }else{ ?>
                      <li><a href="#" style="color: white;">Profile</a></li>
                    <?php } ?>
                      <li><a href="logout.php" style="color: white;">Logout</a></li> 
                   </ul>
                </div>
          </ul>
      </li>
<?php }else{ ?>
      <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <span class="glyphicon glyphicon-log-in"style="font-size: 30px;"></span><strong> Login</strong> </a>
      <ul class="dropdown-menu" style="width:300px; background-image: linear-gradient(to right, black, #b71616);border-radius: 25px 25px 25px 25px;">
                <div class="panel-heading" style="text-align: center;color: white;">
                  <form action="login1.php" method="POST">
                  <label for="name">Username</label>
                  <input type="text" class="form-control" name="name" id="name" required/><br>
                  <label for="psw">Password</label>
                  <input type="password" class="form-control" name="psw" id="psw" required/>
                  <p><br/></p>
                  <input type="submit" class="btn btn-danger" id="login" value="Login">
                </form>
                </div>
          </ul>
        </li>
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"style="font-size: 30px;"></span><strong> Sign Up</strong> </a></li>
    </ul>
  <?php } ?>
  </div>
</nav>

<body>
<div class="main">
  <h1 style="text-align: center;color:#b71616;">Buy This product</h1>

      <?php
        $servername = "localhost"; $username = "root"; $password = ""; $dbname = "cliche";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }else{ 

    $qry = "SELECT * FROM products WHERE pId = '$pId'";
    $query = mysqli_query($conn, $qry);
    $rows = mysqli_num_rows($query);
  
      $row = $query -> fetch_assoc(); ?>
    <div class="row" style="padding: 10px;">           
            <div class="col-sm-4"><div class="polaroid thumbnail">
              <img src="<?php echo $row['image'] ?>">
            </div></div>
           
            <div class="col-sm-8">
               <h3><strong style="color: #b71616"><?php echo $row['title']; ?></strong><br></h3>
               <h4><strong><?php echo $row['dscrp']; ?></strong><br></h4>
               <h4><strong style="color: #b71616">#<?php echo $row['catagory']." #".$row['occasion']." #".$row['recepient'];?></strong><br></h4>
               <h3><strong style="color: #b71616">Price: <?php echo $row['price']; ?>Tk</strong></h3>
                 
              <form role="form" action="buy1.php" method="GET">
                <input type="hidden" name="pId" value="<?php echo $pId?>">
                 
                 <?php If( isset($_SESSION['id']) ){ ?>

                <input type="hidden" name= "userId" value="<?php echo $_SESSION['id']?>">
                <input type="hidden" name= "name" value="<?php echo $_SESSION['name']?>">
                <input type="hidden" name= "phone" value="<?php echo $_SESSION['phone']?>">
                <input type="hidden" name= "address" value="<?php echo $_SESSION['address']?>">

                <?php  }else{ ?>

                 <label for="name"><strong>Your name </strong></label>
                <input type="text" class="polaroid" placeholder="Enter Username" name="name" required>    
                 <label for="phone"><strong>Phone Number </strong></label>
                <input type="text" class="polaroid" placeholder="Enter Phone Number" name="phone" required><br>
                 <label for="text"><strong> Address </strong></label>
                <input type="text" class="polaroid" placeholder="Enter Address" name="address" required><br><br>
                 <?php } ?>
                 
                 <label for="delivery"><strong>Choose Delivery Method   </strong></label>
                <input type="radio" name="delivery" value="Cash"> Cash on Delivery
                <input type="radio" name="delivery" value="Courier"> Courier Service<br><br>
                
                <button type="submit" class="btn btn-danger">Place Your order!</button>
              </form>
            </div>
    
      <?php } $conn->close(); ?> 
    </div>
</div>

</body>

</html>