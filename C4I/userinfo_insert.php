<?php
session_start();
include("config.php");
$first_name=strip_tags(preg_replace("/\s+/"," ",$_POST['first_name']));
$last_name=strip_tags(preg_replace("/\s+/"," ",$_POST['last_name']));
$gender=$_POST['gender'];
$birth_date=$_POST['birth_date'];
$country=strip_tags(trim($_POST['country']),"");
$province=strip_tags(trim($_POST['province']),"");
$role=strip_tags(trim($_POST['role']),"");
$email=strip_tags(trim($_POST['Email']),"");
$date=date("y-m-d");
mysqli_query($con,"insert into users (first_name,last_name,gender,birth_date,country,role,email,province) values('$first_name','$last_name',$gender,$birth_date,$country,$role,'$email',$province)");
echo "insert into users (first_name,last_name,gender,birth_date,country,role,email,province) values('$first_name','$last_name',$gender,$birth_date,$country,$role,'$email',$province)";
$id=mysqli_insert_id($con);
foreach ($_POST[os] as $value) {

    mysqli_query($con,"insert into rest_info(os_id,user_id) values($value,$id)");
}
header ("location:form.php");


?>

