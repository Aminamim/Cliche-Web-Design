<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
	<title>Add A Product</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="adding.css">
<meta charset="utf-8">


<nav class="navbar navbar-inverse navbar-fixed-top" style="background-image: linear-gradient(to right, black, #b71616);height: 10%;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="root.php"><img src="cliche_logo.png" style="width: 150px;height: 60px;"></a>

    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Adding</a></li>
    </ul>

     <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search Products">
      </div>
      <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span> GO!</button>
    </form>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="root.php"><span class="glyphicon glyphicon-home" style="font-size: 30px;"></span><strong> Back to Home</strong></a>
      </li>
      <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">
      <span class="glyphicon glyphicon-user"style="font-size: 30px;"></span>
        <strong> Hello, <?php echo $_SESSION['name']."!"; ?></strong></a>
       <ul class="dropdown-menu" style="width:200px; background-image: linear-gradient(to right, black, #b71616);border-radius: 25px 25px 25px 25px;">
                  <ul  style=" font-size: 20px;text-align: center;padding: 30px">
                      <li><a href="adding.php" style="color: white;">Add Product</a></li>
                      <li><a href="logout.php" style="color: white;">Logout</a></li> 
                   </ul>
                </div>
          </ul>
      </li>
    </ul>
  </div>
</nav>
</head>
<body>

<div class="main">
  <h1 style="text-align: center;color:#b71616;">Add A Product in <strong>Cliché</strong></h1>
  <form role="form" action="adding1.php" method="GET">
      
      <div class="formcontainer">
      <div class="container">
        
         <label for="title"><strong>Product Title </strong></label>
        <input type="text" class="polaroid" placeholder="Enter Title" id="title" name="title" required><br>
         <label for="price"><strong>Price </strong></label>
        <input type="text" class="polaroid" placeholder="Enter Price" id="price" name="price" required><br>
         <label for="image"><strong>Photo </strong></label>
        <input type="text" class="polaroid" placeholder="Enter Photo" id="image" name="image" required><br>
         <label for="dscrp"><strong>Description </strong></label>
        <input type="text" class="polaroid" placeholder="Enter Description" id="dscrp" name="dscrp"><br><br>
     
       <label for="catagory"><strong>Catagory   </strong></label>
      <input type="radio" name="catagory" value="Accessories"> Accessoies
      <input type="radio" name="catagory" value="Antiques"> Antiques
      <input type="radio" name="catagory" value="Handmade"> Handmade
      <input type="radio" name="catagory" value="Casual"> Casual
      <input type="radio" name="catagory" value="Personalized"> Personalized
      <input type="radio" name="catagory" value="Luxurious"> Luxurious
      <input type="radio" name="catagory" value="Minimal"> Minimal<br>

       <label for="recepient"><strong>Recepient   </strong></label>
      <input type="radio" name="recepient" value="Men"> Men
      <input type="radio" name="recepient" value="women"> Women
      <input type="radio" name="recepient" value="Kids"> Kids
      <input type="radio" name="recepient" value="Teen"> Teen
      <input type="radio" name="recepient" value="Friend"> Friend
      <input type="radio" name="recepient" value="All"> All<br>

       <label for="occasion"><strong>Occasion   </strong></label>
      <input type="radio" name="occasion" value="Wedding"> Wedding
      <input type="radio" name="occasion" value="Birthday"> Birthday
      <input type="radio" name="occasion" value="Party"> Party
      <input type="radio" name="occasion" value="Anniversary"> Anniversary
      <input type="radio" name="occasion" value="Casual"> Casual<br><br>
        <button type="submit" class="btn btn-danger">Add the product</button>
  
      </div>
      </div>
    </form>

</div>

</body>
</html>