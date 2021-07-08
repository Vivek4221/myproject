<?php
$servername ="localhost";
$username = "root";
$password = "";
$database="loginpage1";
//creating database
$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){

    die("Sorry!".mysqli_connect_error());
}
else{
    echo"Succesfull";
    echo"<br>";
}
//sql run
$sql="UPDATE * FROM `login` WHERE  'name' ='vivek'";
$result= mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
echo $num . " records found in the  DataBase<br>";
if($num> 0){
    while($row = mysqli_fetch_assoc($result)){
        echo  $srno. ". hello ". $row['name'] ." welcome to ". $row['email'];
        echo "<br>";
    
    }
}
 ?>
