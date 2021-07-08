<?php
//connecting database


$servername ="localhost";
$username = "root";
$password = "";
$database="rahul";


$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){

    die("Sorry!".mysqli_connect_error());
}
else{
    echo"Succesfull";
}

$sql = "SELECT * FROM `cake shop`";
$result = mysqli_query($conn,$sql);


//find the  number of records returned
$num = mysqli_num_rows($result);
echo $num;

//Diplaay the rows returned by sql query
if($num>0){
     $row = mysqli_fetch_aos($result);
     echo var_dump($row);
echo"<br>";
if($num>0){
    $row = mysqli_fetch_aos($result);
    echo var_dump($row);
    

}

?>