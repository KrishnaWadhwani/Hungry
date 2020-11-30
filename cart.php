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
      <?php include "navbar.php";
      $id=$_GET['id'];
       $sql = "SELECT * FROM selldb INNER JOIN tbl_images ON tbl_images.id = selldb.id WHERE tbl_images.id = '$id'";
       // Check connection
       
       $result = $conn->query($sql);
       $res = "";
      
       if ($result->num_rows > 0) {
       // output data of each row
       while($row = $result->fetch_assoc()) {
           $product=$row['dish'];
           $sellername=$row['username'];
           $piid=$row['id'];
           $food_type=$row['type'];
           $price=$row['price'];
           $email=$row['email'];
           $address=$row['address'];
           $address2=$row['address2'];
           $state=$row['state'];
           $des=$row['des'];
           $sellerpincode=$row['zip'];
           $costumerpincode=$_SESSION['pincode'];
           $costumercno=$_SESSION['cno'];
           $sellercno=$row['cno'];
           $costumeraddress=$_SESSION['address'];
           $costumeremail=$_SESSION['useremail'];

       }}
       
                if(isset($_POST['atc'])){
                    $INSERT = "INSERT INTO `cart`(`piid`, `useremail`, `product`, `price`, `food_type`, `sellername`, `selleremail`, `selleraddress`, `selleraddress2`, `state`, `des`, `sellerpincode`, `costumerpincode`, `costumercno`, `sellercno`, `costumeraddress`, `costumeremail`) VALUES ('$piid', '$email','$product','$price','$food_type','$sellername','$email','$address','$address2','$state','$des','$sellerpincode','$costumerpincode','$costumercno','$sellercno','$costumeraddress','$costumeremail')";
                    $query=mysqli_query($conn, $INSERT) or die(mysqli_error($conn));
                    if($query==1){
                      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Success</strong> Your Item Is In The Cart
                      
                         
                      
                    </div>';
                    }
                }
                echo '<center>Redirecting You To Your Cart...</center> <meta http-equiv="refresh" content="2;url=user-cart.php">';?>
      <!-- /Navbar -->
    </header>
    <?php $id=$_GET['id'];
     ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- Footer-->
   <?php include "footer.php"; ?>
   
    <!-- JavaScript files-->
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }    
      // to avoid CORS issues when viewing using file:// protocol, using the demo URL for the SVG sprite
      // use your own URL in production, please :)
      // https://demo.bootstrapious.com/directory/1-0/icons/orion-svg-sprite.svg
      //- injectSvgSprite('${path}icons/orion-svg-sprite.69651a96.svg'); 
      injectSvgSprite('https://demo.bootstrapious.com/directory/1-4/icons/orion-svg-sprite.svg'); 
      
    </script>
    <!-- jQuery-->
    <script src="https://d19m59y37dris4.cloudfront.net/directory/1-6/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap JS bundle - Bootstrap + PopperJS-->
    <script src="https://d19m59y37dris4.cloudfront.net/directory/1-6/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Magnific Popup - Lightbox for the gallery-->
    <script src="https://d19m59y37dris4.cloudfront.net/directory/1-6/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Smooth scroll-->
    <script src="https://d19m59y37dris4.cloudfront.net/directory/1-6/vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
    <!-- Bootstrap Select-->
    <script src="https://d19m59y37dris4.cloudfront.net/directory/1-6/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
    <script src="https://d19m59y37dris4.cloudfront.net/directory/1-6/vendor/object-fit-images/ofi.min.js"></script>
    <!-- Swiper Carousel                       -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/directory/1-6/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="js/demo.36f8799a.js"></script>
    <script>var basePath = ''</script>
    <!-- Main Theme JS file    -->
    <script src="js/theme.55f8348b.js"></script>
  </body>
</html>