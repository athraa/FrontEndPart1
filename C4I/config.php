<?php
$con = mysqli_connect("localhost","root","","code");
mysqli_query($con,"SET NAMES 'utf8'");
mysqli_query($con,"SET CHARACTER SET utf8");
mysqli_query($con,"SET COLLATION_CONNECTION = 'utf8_general_ci'");
ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING| E_PARSE | E_NOTICE );

?>
