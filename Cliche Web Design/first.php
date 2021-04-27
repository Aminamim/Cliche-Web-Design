<!DOCTYPE html>
<html>
<head>
  <title>Welcome to Cliché</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
* 

.transbox {
  width: 60%;
  margin: 30px;
  background-color: white;
  border: 1px solid black;
  opacity: 0.8;
}
.transbox p {
  margin: 5%;
  font-weight: bold;
  color: #000000;
}

.menu {
  float:left;
  width:20%;
  text-align:center;
}
.menu a {
  background-color:#e5e5e5;
  padding:8px;
  margin-top:7px;
  display:block;
  width:100%;
  color:black;
}
.main {
  float:left;
  width:60%;
  padding:0 20px;
}
.right {
  background-color:#e5e5e5;
  float:left;
  width:20%;
  padding:15px;
  margin-top:7px;
  text-align:center;
}

.icon-bar {
  width: 5%;
  position: fixed;
  z-index: 1;
  background: indianred;
  overflow-x: hidden;
  
}
.icon-bar a {
  display: block;
  text-align: center;
  padding: 12px;
  transition: all 0.3s ease;
  color: white;
  font-size: 36px;

}
.icon-bar a:hover {
  background-color: maroon;
}
.active {
  background-color: maroon;
}

@media only screen and (max-width:620px) {
  /* For mobile phones: */
  .menu, .main, .right, .id, .transbox, .icon-bar{
    width:100%;
  }
}
</style>

<div class="icon-bar">
      
        <a href="first.php"><i class="fa fa-home"></i></a>
        <a href="books.php"><i class="fa fa-search"></i></a>  
        <a href="profile.php"><i class="fa fa-id-card"></i></a> 
        <a href="logout.php"><i class="fa fa-sign-out"></i></a>
        <a href="login.php"><i class="fa fa-sign-in"></i></a>

  </div>
</head>

<body>

<div style="background-color:black;padding:0px;text-align:center;">


  <div id="demo" class="carousel slide" data-ride="carousel">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <div class="carousel-inner">
     
    <div class="carousel-item active">
       <div class="transbox">
    <h1>Welcome to</h1>
    <h4>The best place for older books</h4>
  </div>
      <img src="gift1.jpg" alt="Los Angeles" width="100%" height="auto">

      <div class="carousel-caption">
        <h3 style="color: black;">HTML5</h3>
        <p>html5!</p>
      </div>   
    </div>
    <div class="carousel-item">
       <div class="transbox">
    <h1>Welcome to</h1>
    <h4>The best place for older books</h4>
  </div>
      <img src="gift2.jpg" alt="Chicago" width="100%" height="auto">
      <div class="carousel-caption">
        <h3>BOOTSTRAP4</h3>
        <p>botstrap4!</p>
      </div>   
    </div>
    <div class="carousel-item">
       <div class="transbox">
    <h1>Welcome to</h1>
    <h4>The best place for older books</h4>
  </div>
      <img src="gift3.jpg" alt="New York" width="100%" height="auto">
      <div class="carousel-caption">
        <h3 style="color: black">CSS3</h3>
        <p>css3!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>




<div style="overflow:auto">
  <div class="menu">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
    <a href="#">Link 4</a>
  </div>

  <div class="main">
    <h2>Lorum Ipsum</h2>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
  </div>

  <div class="right">
    <h2>About</h2>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
  </div>
</div>

<div style="background-color:#e5e5e5;text-align:center;padding:10px;margin-top:7px;">Š copyright w3schools.com</div>

</body>
</html>
