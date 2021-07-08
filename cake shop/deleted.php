
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
}
//sql run
$sql="DELETE FROM `loginform1` WHERE `loginform1`.`name` = 'dsv'";
$result= mysqli_query($conn,$sql);
$aff = mysqli_affected_rows($conn);
echo"<br> Number of affected rows: $aff <br>";
if($result){
    echo" DEleted Successfull";
}else{
    $err =mysqli_error($conn);
    echo" NOT deleted susscssflly due to this error--> $err";
}


?>
