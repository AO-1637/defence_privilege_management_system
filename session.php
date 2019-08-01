<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$connection = mysqli_connect("localhost","root","","defense_privilege") or die(mysqli_error($connection));
//Check connection
if($connection == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>