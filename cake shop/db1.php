<?php
//Creating db...
$servername="localhost";
$username="root";
$password="";
$database="dbharry";

$conn= mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("sorry!!");
}
else{
    echo"Succes!!";
}


//creating  table 
$sql="INSERT INTO `cake shop` (`sr.no`, `name`, `date & time`) VALUES (NULL, 'vivek', current_timestamp())";
$result= mysqli_query($conn,$sql);
//insert  data 2 in database.
$sql="INSERT INTO `cake shop` (`sr.no`, `name`, `date & time`) VALUES (NULL, 'amiraj', current_timestamp())";
$result= mysqli_query($conn,$sql);
//insert 3 data
$sql="INSERT INTO `cake shop` (`sr.no`, `name`, `date & time`) VALUES (NULL, 'mehul', current_timestamp())";
$result= mysqli_query($conn,$sql);











?>