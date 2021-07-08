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

<div class="container">
  <h2>Stacked form</h2>
  <form action="/cake shop/form1.php " method=post>
    <div class="form-group">
      <label for="name">name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php
//post method
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
   
   } 
//connect database
$servername="localhost";
$username="root";
$password="";
$database="form2";

$conn= mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("sorry!!".mysqli_connect_error());
}
else{
   
//sql quary
$sql="INSERT INTO `form` (`srno`, `name`, `email id`) VALUES (NULL, '$name', '$email');";
$result= mysqli_query($conn,$sql);
if($result){
    echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
    <button type="button" class="close" data-dismiss="alert" aria-label="Cslose">
    <span aria-hidden="true">&times;</span>
    </button>
</div>';
    
}
else{
  echo"sorry!!".mysqli_connect_error($conn);
    

    
   
}
}



    

?>


</body>
</html>
