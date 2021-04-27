<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
  <title>Cliché</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="root.css">
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
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <strong> All Catagories Here  </strong></a>
        <ul class="dropdown-menu" style="width:650px; background-image: linear-gradient(to right, black, #b71616);border-radius: 25px 25px 25px 25px; text-align: center;">
       
  <table>
    <thead>
      <tr>
        <th> <form action="products.php"><input type="hidden" name="keyword" value="Accessories">
      <button type="submit" class="btn btn-danger">Accessories</button></form></th>
        <th><form action="products.php"><input type="hidden" name="keyword" value="Antiques">
      <button type="submit" class="btn btn-danger">Antiques</button></form></th>
        <th><form action="products.php"><input type="hidden" name="keyword" value="Minimal">
      <button type="submit" class="btn btn-danger">Minimal</button></form></th>
        <th><form action="products.php"><input type="hidden" name="keyword" value="Casual">
      <button type="submit" class="btn btn-danger">Casual</button></form></th>
        <th><form action="products.php"><input type="hidden" name="keyword" value="Luxurious">
      <button type="submit" class="btn btn-danger">Luxurious</button></form></th>
      </tr>
      <tr>
        <td><form action="products.php"><input type="hidden" name="keyword" value="Women">
      <button type="submit" class="btn btn-danger">Women</button></form></td>
        <td><form action="products.php"><input type="hidden" name="keyword" value="Men">
      <button type="submit" class="btn btn-danger">Men</button></form></td>
        <td><form action="products.php"><input type="hidden" name="keyword" value="Kids">
      <button type="submit" class="btn btn-danger">Kids</button></form></td>
        <td><form action="products.php"><input type="hidden" name="keyword" value="Teen">
      <button type="submit" class="btn btn-danger">Teen</button></form></td>
        <td><form action="products.php"><input type="hidden" name="keyword" value="All">
      <button type="submit" class="btn btn-danger">All</button></form></td>
      </tr>
      <tr>
        <td><form action="products.php"><input type="hidden" name="keyword" value="Wedding">
      <button type="submit" class="btn btn-danger">Wedding</button></form></td>
        <td><form action="products.php"><input type="hidden" name="keyword" value="Party">
      <button type="submit" class="btn btn-danger">Party</button></form></td>
        <td><form action="products.php"><input type="hidden" name="keyword" value="Birthday">
      <button type="submit" class="btn btn-danger">Birthday</button></form></td>
        <td><form action="products.php"><input type="hidden" name="keyword" value="Anniversary">
      <button type="submit" class="btn btn-danger">Anniversary</button></form></td>
      </tr>
  </table>
          </ul>
      </li>
    </ul>


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


<div id="myCarousel" class="carousel slide" data-ride="carousel" >   
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="gift4.jpg" alt="First slide" style="width: 100%; height: 500px;" >
            <div class="carousel-caption">
              <h1 style="font-size: 60px;">Welcome to Cliché Gift Store</h1>
        </div>
      </div>
      <div class="item">
        <img src="gift2.jpg" alt="Second slide" style="width: 100%; height: 500px;">
            <div class="carousel-caption">
              <h1>Buy Unique Gifts</h1>
              <p>Unique and Authentic Gifts for Your Special Ones</p>
        </div>
      </div>
      <div class="item">
        <img src="gift3.jpg" alt="Third slide" style="width: 100%; height: 500px;">
        
            <div class="carousel-caption">
              <h1>Sign Up or Log In</h1>
              <p>Get Amazing Offers and Deals at Best Price!</p>
        </div>
      </div>
    </div>
  </div>
  

<br>
<div class="container-fluid text-center" id="CATEGORIES">
  <h1 style="color:#b71616 "><i><strong>"Love the giver, more than the gift"</i></strong></h1>
  <br><br>
  <div class="row">

    <div class="col-sm-4" ><span class="glyphicon glyphicon-headphones logo-small"></span>
      <form action="products.php">
      <div class="form-group"><input type="hidden" class="form-control" name="keyword" value="Accessories"></div>
      <button type="submit" class="btn btn-danger">Accessories</button>
    </form></div>

    <div class="col-sm-4" ><span class="glyphicon glyphicon-glass logo-small"></span>
      <form action="products.php">
      <div class="form-group"><input type="hidden" class="form-control" name="keyword" value="Antiques"></div>
      <button type="submit" class="btn btn-danger">Antiques</button>
    </form></div>

    <div class="col-sm-4" ><span class="glyphicon glyphicon-heart logo-small"></span>
      <form action="products.php">
      <div class="form-group"><input type="hidden" class="form-control" name="keyword" value="Handmade"></div>
      <button type="submit" class="btn btn-danger">Handmade</button>
    </form></div>
 
  </div>
  <br>
  <div class="row">

    <div class="col-sm-4" ><span class="glyphicon glyphicon-gift logo-small"></span>
      <form action="products.php">
      <div class="form-group"><input type="hidden" class="form-control" name="keyword" value="Casual"></div>
      <button type="submit" class="btn btn-danger">Casual</button>
    </form></div>
    
    <div class="col-sm-4" ><span class="glyphicon glyphicon-bell logo-small"></span>
      <form action="products.php">
      <div class="form-group"><input type="hidden" class="form-control" name="keyword" value="Personalized"></div>
      <button type="submit" class="btn btn-danger">Personalized</button>
    </form></div>
   
   <div class="col-sm-4" ><span class="glyphicon glyphicon-usd logo-small"></span>
      <form action="products.php">
      <div class="form-group"><input type="hidden" class="form-control" name="keyword" value="Luxurious"></div>
      <button type="submit" class="btn btn-danger">Luxurious</button>
    </form></div>
    
  </div><br>
  <div class="row">
    <div class="col-sm-12" ><span class="glyphicon glyphicon-leaf logo-small"></span>
      <form action="products.php">
      <div class="form-group"><input type="hidden" class="form-control" name="keyword" value="Minimal"></div>
      <button type="submit" class="btn btn-danger">Minimal</button>
    </form></div>
  </div>
</div>
<br><br>


<div class="container-fluid text-center bg-grey" style="background-color: #f7eaea;">
  <h2 style="color: #b71616;">Whats Trendy Now?</h2><br>
  <div class="row text-center">
      <?php
        $servername = "localhost"; $username = "root"; $password = ""; $dbname = "cliche";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }else{ 

    $qry = "SELECT * FROM products ";
    $query = mysqli_query($conn, $qry);
    $rows = mysqli_num_rows($query);
    if($rows){  
      for($i=0; $i < 4 ; $i++){
      $row = $query -> fetch_assoc(); ?>

            <div class="col-sm-3"><div class="polaroid">
              <div class="thumbnail">
              <img src="<?php echo $row['image'] ?>"class="img-rounded">
              <div class="top-right">
              <h4><a href="buy.php?pId=<?php echo $row['pId']?>" style="color: white;">Buy This Product</a></h4>
              </div>
              <strong>Price: <?php echo $row['price']; ?>Tk</strong><br> 
              <h3><strong style="color: #b71616"><?php echo $row['title']; ?></strong><br></h3>
              <h4><strong><?php echo $row['dscrp']; ?></strong><br></h4>
              <h4><strong style="color: #b71616">#<?php echo $row['catagory']." #".$row['occasion']." #".$row['recepient'];?></strong><br></h4>
            </div></div></div>
    <?php } ?>
      <?php } } $conn->close(); ?> 
  </div>
  <a href="products.php"><h2 style="color: #b71616;">View All Our Products</h2></a><br>
</div>
<div class="container-fluid text-center bg-grey">
   <div class="row">
     <div class="col-sm-8">
         <h2 style="color: #b71616;">Contact Us: 01XXXXXXXXX</h2>
         <h2 style="color: #b71616;">Email: www@cliche.com</h2>
     </div>
     <div class="col-sm-4">
         <h2 style="color: #b71616;"> ©2020 Cliche.com</h2>
     </div>
   </div>
</div>
<body>
</body>

</html>