<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark ml_auto">
  <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
</nav>
<br>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email= $_POST['email'];
    $password= $_POST['pass'];
    echo'<div class="alert alert-success">
        <strong>Success!</strong> This alert box could indicate a successful or positive action.
      </div>';
      $servername ="localhost";
      $username = "root";
      $password = "";
      $database="dbharry";
      //creating database
      $conn = mysqli_connect($servername,$username,$password,$database);
      if(!$conn){
      
          die("Sorry!".mysqli_connect_error());
      }
      else{
          echo"Succesfull";
      }
      ?>


<div class="container">
  <form action="/cake shop/form.php"  method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pass">Password:</label>
      <input type="pass" class="form-control" id="pass" placeholder="Enter password" name="pass">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>
