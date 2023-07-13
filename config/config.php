

<!--  -->

<?php
ob_start();//Turns on output buffering
session_start();

$timezon=date_default_timezone_set("Africa/Kampala");


$con=mysqli_connect("localhost","root","","yiiiii");


if(mysqli_connect_errno()){


    echo "Failed to connect:".mysqli_connect_errno();
}






?>