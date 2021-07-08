<?php

session_start();
if(isset($_SESSION['username'])){
echo "welcome ".$_SESSION['username'];
echo"<br> Your fav category is".$_SESSION['favcat'] ;
echo" <br>";
}
else{
    echo" Plese login to contine";
    
}

?>