<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
        display: none;
    }
   
</style>

    <title>Forgot Password</title>
  </head>
  <body>

<?php
error_reporting(0);
if(isset($_POST['submit'])){
$useremail = $_POST['useremail'];
include "db_connect.php";
$sql = "SELECT * FROM `logindb` WHERE `useremail` = '$useremail'";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
	$name = $row['username'];
	$email = $row['useremail'];
	$pincode = $row['pincode'];
	$pass = $row['password'];
}}
$to = $useremail;
$subject = "Forgot Hungry Password"; 
$message = "Hey! Whats Up $name Hope You Are Fine. $name If You Forgot Your Password Of Hungry So Here Is Your Account Details:
Username: $name
Useremail: $email
Pincode: $pincode
Password: $pass
If You Haven't Requested The Password Just Forget This And Continue... Your Extra Odinary Life
Thank You
Krishna";
$header = "From: kwswhwmw@gmail.com";
$mail = mail($to, $subject, $message, $header);
if($mail){
	echo'<div class="alert alert-success" role="alert">
	'.$name.' Your Account Details Are Sent To '.$useremail.'
	</div>';
	echo'<a class = "btn btn-primary" href = "login.html">Go To Login</a>
	<hr>';
}
else{
	echo'<div class = "alert alert-danger" role = "alert>
	Sorry This Email Is Invalid
	</div>';
}

}
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>