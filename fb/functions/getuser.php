<?php
include('functions/connect.php');
$getUser="SELECT *FROM users";
$altUsers=mysqli_query($conn,$getUser);

?>