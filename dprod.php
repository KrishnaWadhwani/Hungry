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
 
  </head>
  <body style="padding-top: 72px;">
    <header class="header">
      <!-- Navbar-->
      <?php include "dnavbar.php";?>
      <!-- /Navbar -->
    </header>


       <?php
       $id=(int)$_GET['id'];
       
        include "db_connect.php";
        $sql = "SELECT * FROM `order` WHERE id='$id' Limit 1";
        // Check connection
        
        
        $result = $conn->query($sql);
        $res = "";
       
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $product= $row['dish'];
          $address=$row['selleraddress2'];
          $address1=$row['selleraddress'];
          $state=$row['state'];
          $driver = $row['driver'];
          
          $state=$row['state'];
          

          $res = $res . '<center><div class="card" style="width: 18rem;">';
          $res = $res . '<div class="card-img-top" height="100%" width="100%"  class="img-thumnail"><div class="earth3dmap-com" id = "selleraddress"><iframe id="iframemap" src="https://maps.google.com/maps?q='.$state.'+'.$address1.'+'.$address.'&amp;ie=UTF8&amp;iwloc=&amp;output=embed" width="100%" height="500" frameborder="0" scrolling="no"></iframe><div style="color: #333; font-size: 14px; font-family: Arial, Helvetica, sans-serif; text-align: right; padding: 10px;"></div></div>';
          ?>
            <script>
                var caddress = '<?php echo $caddress=$row['costumeraddress']; ;?>';
          function myFunction() {
            document.getElementById("selleraddress").innerHTML = '<div class="card-img-top" height="100%" width="100%"  class="img-thumnail"><div class="earth3dmap-com" ><iframe id="iframemap" src="https://maps.google.com/maps?q='+caddress+';ie=UTF8&amp;iwloc=&amp;output=embed" width="100%" height="500" frameborder="0" scrolling="no"></iframe><div style="color: #333; font-size: 14px; font-family: Arial, Helvetica, sans-serif; text-align: right; padding: 10px;"></div></div>';
            document.getElementById("pud").innerHTML = '';
          }
          </script>
          <?php
          
          $res = $res . '<div id="pud"><button class = "btn btn-warning" type="button" onclick="myFunction()">Pick Up Done</button></div>';
          $res = $res . '<div class="card-body">';
          $res = $res . '<h5 class="card-title">'. $row["dish"] . '</h5>';
          $res = $res . '<p class="card-text" >Seller Name: '. $row["sellername"] . '</p>';
          $res = $res . '<p class="card-text" >Seller Address: '. $row["selleraddress"] . '</p>';
          $res = $res . '<p class="card-text" >Seller Address2: '. $row["selleraddress2"] . '</p>';
          $res = $res . '<p class="card-text" >Seller Contact Number: '. $row["sellercno"] . '</p>';
          $res = $res . '<p class="card-text" >Costumer Address: '. $row["costumeraddress"] . '</p>';
          $res = $res . '<p class="card-text" >Dish Name: '. $row["dish"] . '</p>';
          $res = $res . '<p class="card-text" >Price: '. $row["price"] . ' <i class="fas fa-rupee-sign"></i></p>';
          $res = $res . '<p class="card-text" >Dish Type: '. $row["type"] . '</p>';
          $res = $res . '<p class="card-text" >Dish Description: '. $row["des"] . '</p>';
          $res = $res . '<form action="id.php?id='.$row['id'].'" method="POST"><button name="di" class="btn btn-danger">&times; Delivey Done &times;</button></form>';
          $res = $res . '<br>';
  
          $res = $res . '</div></center>';
          $id++;
        }  }
        else{
            echo '<h2><Center class="nia" >Sorry This Is No Order, Please Check PIID </center></h2><br><br><br><br><br>';
          }
          
        echo $res;

        ?>       


