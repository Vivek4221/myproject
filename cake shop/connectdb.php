<?php
echo "welcome to my home";

//connect database
$servername ="localhost";
$username = "root";
$password = "";
$database="rahul";
//creating database
$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){

    die("Sorry!".mysqli_connect_error());
}
else{
    echo"Succesfull";
}
?>
