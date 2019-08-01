<?php
include("session.php");
$service_id = mysqli_real_escape_string($connection,$_POST['service_id']);
$status = mysqli_real_escape_string($connection,$_POST['status']);
$name = mysqli_real_escape_string($connection,$_POST['name']);
$gender = mysqli_real_escape_string($connection,$_POST['gender']);
$dob = mysqli_real_escape_string($connection,$_POST['dob']);
$contact_number = mysqli_real_escape_string($connection,$_POST['contact_number']);
$type = mysqli_real_escape_string($connection,$_POST['type']);
mysqli_query($connection,"INSERT INTO SERVING_PERSONNEL VALUES('$service_id','$status','$name','$gender','$dob','$contact_number','$type')");
$_SESSION["s_id"] = $service_id;
header("Location:generic.php");
?>