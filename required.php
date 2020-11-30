<?php
session_start();
error_reporting(0);
session_regenerate_id();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.html");
}
$username = $_SESSION['username'];
$cno = $_SESSION['cno'];
$useremail = $_SESSION['useremail'];
$pincode = $_SESSION['pincode'];
?>