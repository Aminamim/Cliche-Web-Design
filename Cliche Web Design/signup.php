<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="signup.css">
<meta charset="utf-8">

<div class="icon-bar">    
    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter-square"></i></a>
    <a href="#"><i class="fa fa-instagram"></i></a>
    <a href="#"><i class="fa fa-pinterest"></i></a>
  </div>

<nav class="navbar navbar-inverse navbar-fixed-top" style="background-image: linear-gradient(to right, black, #b71616);height: 10%;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="root.php"><img src="cliche_logo.png" style="width: 150px;height: 60px;"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Registration</a></li>
    </ul>
      <form class="navbar-form navbar-left" action="products.php">
       <div class="form-group">
         <input type="text" class="form-control" placeholder="Search Products" name="keyword">
       </div>
         <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span> GO!</button>
      </form>
    <ul class="nav navbar-nav navbar-right">
    	 <li><a href="root.php"><span class="glyphicon glyphicon-home" style="font-size: 30px;"></span><strong> Back to Home</strong></a></li>
    </ul>
  </div>
</nav>
</head>
<body>

<div class="main">
  <h1 style="text-align: center;color:#b71616;">Sign Up in <strong>Cliché</strong></h1>
  <form role="form" action="signup1.php" method="GET">
      
      <div class="formcontainer">
      <div class="container">
         <label for="name"><strong>Username </strong></label>
        <input type="text" class="polaroid" placeholder="Enter Username" id="name" name="name" required><br>
         <label for="mail"><strong>E-mail </strong></label>
        <input type="text" class="polaroid" placeholder="Enter E-mail" id="mail" name="mail" required><br>
         <label for="psw"><strong>Password </strong></label>
        <input type="password" class="polaroid" placeholder="Enter Password" id="psw" name="psw" required><br>
         <label for="phone"><strong>Phone Number </strong></label>
        <input type="text" class="polaroid" placeholder="Enter Phone Number" id="phone" name="phone"><br>
         <label for="text"><strong> Address </strong></label>
        <input type="text" class="polaroid" placeholder="Enter Address" id="address" name="address"><br><br><br>
        <button type="submit" class="btn btn-danger">Create an account!</button>
  
      </div>
      </div>
    </form>

</div>
</body>
</html>