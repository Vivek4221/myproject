<?php
echo" welcome my cookies page";
echo"<br>";
//echo time();
setcookie("category", "book", time() + 86400, "/");
echo" the cookie is set";

?>