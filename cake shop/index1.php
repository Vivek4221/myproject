
<!DOCTYPE html>
<html lang="en">
<head>
  <title>LOGIN </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 20%;
  }
  .aboutimg{
    width: 100%;
    height: 400%;
  }
  #card{
    background-color:#01CBC6;
  }
  
  </style>

<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">AV CAKE SHOP</a>
  
  <!-- Links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="#HOME">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#CONTECT">CONTECT US</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#feedback-container">FEEDBACK</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#About-section">ABOUT US</a>
    </li>
    </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
      </div>

  </ul>
  
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
<div class="conatiner">

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="cake.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="cake2.jpg" alt="Chicago" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<?php
$servername = "localhost";
$username = "root";
$password = "";

if($_SERVER['REQUEST_METHOD']=='POST'){
  $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Success!</strong> This alert box could indicate a successful or positive action.
      <button type="button" class="close" data-dismiss="alert" aria-label="Cslose">
      <span aria-hidden="true">&times;</span>
      </button>
  </div>';

  //connect database
$servername="localhost";
$username="root";
$password="";
$database="loginpage1";
$conn= mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("sorry!!".mysqli_connect_error());
}
else{
     //sq; query
 $sql="INSERT INTO `loginform1` (`srno`, `name`, `email`, `time date`) VALUES (NULL, '$name', '$email', current_timestamp());";
 $result= mysqli_query($conn,$sql);
 
}


} 
    

?>
<div class="container">
  <h3>Progress Bar With Label</h3>
  <div class="progress">
    <div class="progress-bar" style="width:70%"></div>
  </div>
<section class=" my-5">
<div class="py-5">
<h2 class=" text-center">About US </h2>
</div>
<div class="row">
<div class=" col-lg-6 col-md-6 col-12">
<img src="rasmalai.jpg" class= " img-fluid abotimg">
</div>
<div class=" col-lg-6 col-md-6 col-12">
<h2 class=" display-4"> i am vivek singh </h2>
<p class="py-3">Ras Malai Cake Ras Malai Cake is a twist on a very popular Bengali dessert " Ras Malai ".
 Ras Malai is made with homemade cheese known as “ paneer ” or “chana”. It consists of soft paneer balls immersed
  in chilled creamy milk.</p>
  <a href= " about.php" class= " btn btn-success"> check more</a>
  </div>
  <div class="row">
<div class=" col-lg-6 col-md-6 col-12 my-4">
<img src="black.jpg" class= " img-fluid abotimg">
</div>
<div class=" col-lg-6 col-md-6 col-12">
<h2 class=" display-4"> i am xyz </h2>
<p class="py-3">Cartoon birthday party cakes. Sweet baked cake, colorful cupcakes and celebration cakes 
vector illustration set Cartoon birthday party cakes. Sweet baked cake, colorful cupcakes and celebration cakes.</p>
  <a href= " about.php" class= " btn btn-success"> check more</a>
  </div>
</div>
<section class=" my-5">
<div class="py-5">
<h2 class=" text-center">FEEDBACK</h2>
<p>Cartoon birthday party cakes. Sweet baked cake, colorful cupcakes and celebration cakes 
vector illustration set Cartoon birthday party cakes. Sweet baked cake, colorful cupcakes and celebration cakes
Ras Malai Cake Ras Malai Cake is a twist on a very popular Bengali dessert " Ras Malai "Ras Malai is made with homemade cheese known as “ paneer ” or “chana”. It consists of soft paneer balls immersed
  in chilled creamy milk.Ras Malai Cake Ras Malai Cake is a twist on a very popular Bengali dessert " Ras Malai ".
 Ras Malai is made with homemade cheese known as “ paneer ” or “chana”. It consists of soft paneer balls immersed
  in chilled creamy milkRas Malai Cake Ras Malai Cake is a twist on a very popular Bengali dessert " Ras Malai ".
 Ras Malai is made with homemade cheese known as “ paneer ” or “chana”. It consists of soft paneer balls immersed
  in chilled creamy milkRas Malai Cake Ras Malai Cake is a twist on a very popular Bengali dessert " Ras Malai ".
 Ras Malai is made with homemade cheese known as “ paneer ” or “chana”. It consists of soft paneer balls immersed
  in chilled creamy milk</p>
  
  </div>

</section>
<section>
<div class="py-5">
<h2 class="text-center">PRICING</h2>
<hr>
<div class="row">
<div class="col-md-4">
<div class="card">
<div id="card" class="card-body">
<h2 class=" card-title display-4 text-white">89/WEEK</h2>
</div>
<ul class=" list-group list-group-flush font-weight-bold">
<li class="list-group-itam">Cras justo odio</li>
<li class="list-group-itam">Cras justo odio</li>
<li class="list-group-itam">Cras justo odio</li>
<li class="list-group-itam">Cras justo odio</li>
<li class="list-group-itam">Cras justo odio</li>
<li class="list-group-itam">Cras justo odio</li>

</ul>
<button type="submit" class="btn btn-primary">ORDER NOW</button>
 
</div>
</div>
<div class="col-md-4">
<div class="card">
<div id="card" class="card-body">
<h2 class=" card-title display-4 text-white">500/MONTH</h2>
</div>
<ul class=" list-group list-group-flush font-weight-bold">
<li class="list-group-itam">Cras justo odio</li>
<li class="list-group-itam">Cras justo odio</li>
<li class="list-group-itam">Cras justo odio</li>
<li class="list-group-itam">Cras justo odio</li>
<li class="list-group-itam">Cras justo odio</li>
<li class="list-group-itam">Cras justo odio</li>

</ul>
<button type="submit" class="btn btn-primary">ORDER NOW</button>
 
</div>
</div>
<div class="col-md-4">
<div class="card">
<div id="card"class="card-body">
<h2 class=" card-title display-4 text-white">5000/YEAR</h2>
</div>
<ul class=" list-group list-group-flush font-weight-bold">
<li class="list-group-itam">Cras justo odio</li>
<li class="list-group-itam">Cras justo odio</li>
<li class="list-group-itam">Cras justo odio</li>
<li class="list-group-itam">Cras justo odio</li>
<li class="list-group-itam">Cras justo odio</li>
<li class="list-group-itam">Cras justo odio</li>

</ul>
<button type="submit" class="btn btn-primary">ORDER NOW</button>
 
</div>
</div>

</div>
</div>
</section>
</div>


<div class="container">
  <h2 class="text-center">CONTECT US</h2>
  <form action="/cake shop/index1.php" method="Post">
  <div class="form-group">
      <label for="name">name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Your name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Your email" name="email">
    </div>
    <div class="form-group">
      <label for="phone">phone:</label>
      <input type="phone" class="form-control" id="phone" placeholder="Enter Your phone" name="phone">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<footer>
        <div class="text-center ">
            Copyright &copy; www.myOnlinecakeshop.com. All rights reserved!
        </div>
    </footer>



</body>
</html>
