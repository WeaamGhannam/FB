<?php 
mysqli_connect('localhost','root','','fb');
define('SERVERNAME','localhost');
define('USERNAME','root');
define('USERPASS','');
define('DBNAME','fb');

$conn=mysqli_connect(SERVERNAME,USERNAME,USERPASS,DBNAME);
if($conn){
    echo "connected";
    
}else {
    die("Error".mysqli_connect_error());
}


?>