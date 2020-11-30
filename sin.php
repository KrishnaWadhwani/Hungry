<?php
include "required.php";
include "db_connect.php";

error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hungry.Homepage</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Price Slider Stylesheets -->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/directory/1-6/vendor/nouislider/nouislider.css">
    <!-- Google fonts - Playfair Display-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700">
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,700">
    <!-- swiper-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
    <!-- Magnigic Popup-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/directory/1-6/vendor/magnific-popup/magnific-popup.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/directory/1-6/css/style.default.452e11c7.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/directory/1-6/css/custom.0a822280.css">
    <!-- Favicon-->
    <script src="https://kit.fontawesome.com/8a81a9a7f0.js" crossorigin="anonymous"></script>
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <style>
    html {
  scroll-behavior: smooth;
}
    </style>
    <script>
     function swal(){
      swal("Good job!", "Your Mail Recived", "success");
     }
    </script>
  </head>
  <body style="padding-top: 72px;">
    <header class="header">
      <!-- Navbar-->
      <?php include "navbar.php";?>
      <!-- /Navbar -->
    </header>
    <?php
    $username = $_POST['username'];
    $cno = $_POST['cno'];
    $email = $_POST['email'];
    $doi = $_POST['doi'];
    $address = $_POST['address'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $dish = $_POST['dish'];
    $type = $_POST['type'];
    $des = $_POST['des'];
    $zip = $_POST['zip'];
    $price = $_POST['price'];

include 'db_var.php';
include 'db_connect.php';
if(!empty($username) || !empty($cno) || !empty($email) || !empty($doi) || !empty($address) || !empty($address2) || !empty($city) || !empty($state) || !empty($dish) || !empty($type) || !empty($zip) || !empty($des)){
  $INSERT = "INSERT INTO `selldb`(`username`, `cno`, `email`, `doi`, `address`, `address2`, `dish`, `type`, `city`, `state`, `zip`, `des`, `price`) VALUES ('$username','$cno','$email','$doi','$address','$address2','$dish','$type','$city','$state','$zip','$des', '$price')";
  $query=mysqli_query($conn, $INSERT) or die(mysqli_error($conn));
       if($query == 1){
        $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
        $queri = "INSERT INTO tbl_images(name) VALUES ('$file')";  
        $quey = mysqli_query($conn, $queri) or die(mysqli_error($conn));
        echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Hurrayy</strong> Your Dish Is Now Live Redirecting To Homepage..
        <meta http-equiv="refresh" content="1;url=homepage.php">
      </div>';
    }
    else{
      echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Faliure</strong> Something Bad Happend!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
}

?>

    <?php include "footer.php"; ?>
