<?php

//connect database
$servername="localhost";
$username="root";
$password="";
$database="loginpage";

$conn= mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("sorry!!".mysqli_connect_error());
}
else{
    echo"Good<br>";
}

$sql="SELECT * FROM `login`";
$result= mysqli_query($conn,$sql);
//find num of recod
$num= mysqli_num_rows($result);
echo $num;
echo"<br>";



//display the row return data sql query
if($num>0){
   // $row=mysqli_fetch_assoc($result);
    //echo var_dump($row);
    //echo"<br>";
    //$row=mysqli_fetch_assoc($result);
    //echo var_dump($row);
    //echo"<br>";
    //$row=mysqli_fetch_assoc($result);
    //echo var_dump($row);
    //echo"<br>";
    while ($row = mysqli_fetch_assoc($result)){
       // echo var_dump($row);
       echo $row['srno'] . "hello" .$row['name'] ."welcome to" .$row['email'];
        echo"<br>";
    }

}
?>