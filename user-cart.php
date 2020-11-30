<?php
include "required.php";
include "db_connect.php";


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hungry | Cart</title>
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
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body style="padding-top: 72px;">

    <header class="header">
      <!-- Navbar-->
     <?php include "navbar.php"; ?>
      <!-- /Navbar -->
    </header>
    <section class="py-5">
      <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb pl-0  justify-content-start">
          <li class="breadcrumb-item"><a href=homepage.php>Home</a></li>
          <li class="breadcrumb-item active">Cart   </li>
        </ol>
        <div class="d-flex justify-content-between align-items-end mb-5">
          <h1 class="hero-heading mb-0">Your Cart</h1>
        </div>
        <div class="d-flex justify-content-between align-items-center flex-column flex-lg-row mb-5">
          <div class="mr-3">
          <?php $email=$_SESSION['useremail']; error_reporting(0); $connect = mysqli_connect("localhost", "phpmyadmin", "root", "Hungry"); $sql = "SELECT COUNT( * ) as count FROM `cart` WHERE `costumeremail` = '$email'"; $result = mysqli_query($connect, $sql); if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {$output = $row['count']; }}
          echo '<p class="mb-3 mb-lg-0">You have <strong>'.$output,' Items</strong> in your Cart</p>';
          ?></div>
          <div class="text-center">
           
          </div>
        </div>
        <div class="list-group shadow mb-5">

            <?php 
            
            $sql = "SELECT * FROM cart WHERE costumeremail='$email'";
            // Check connection
            $result = $conn->query($sql);
           
            $res = "";
            if ($result->num_rows > 0) {
            // output data of each row
              while($row = $result->fetch_assoc()) {
                $uip = $row['price'] * 1.21;
                echo '</div></a><a class="list-group-item list-group-item-action p-4">
            <div class="row">
              <div class="col-lg-4 align-self-center mb-4 mb-lg-0">
                <div class="d-flex align-items-center mb-3">
                  <h2 class="h5 mb-0">'.$row['product'].'</h2>
                </div>
                <p class="text-sm text-muted">'.$row['sellername'].'</p><span class="badge badge-pill p-2 badge-primary-light">Hungry</span>
              </div>
              <div class="col-lg-8">
                <div class="row">
                  <div class="col-6 col-md-4 col-lg-3 py-3 mb-3 mb-lg-0">
                    <h6 class="label-heading">Price</h6>
                    <p class="text-sm font-weight-bold">'.$uip.' rs</p>
                    <h6 class="label-heading">Sellername </h6>
                    <p class="text-sm font-weight-bold mb-0">'.$row['sellername'].'</p>
                  </div>
                  <div class="col-6 col-md-4 col-lg-3 py-3">
                    <h6 class="label-heading">Pick Up From</h6>
                    <p class="text-sm font-weight-bold">'.$row['selleraddress2'].'</p>
                    <h6 class="label-heading">Food Type</h6>
                    <p class="text-sm font-weight-bold mb-0">'.$row['food_type'].'</p>
                  </div>
                  <div class="col-6 col-md-4 col-lg-3 py-3">
                    <h6 class="label-heading">PIID</h6>
                    <p class="text-sm font-weight-bold">'.$row['piid'].'                                      </p>
                    <h6 class="label-heading">Sellermail</h6>
                    <p class="text-sm font-weight-bold mb-0">'.$row['selleremail'].'</p>
                  </div>
                  <div class="col-12 col-lg-3 align-self-center"><form action="di.php?id='.$row['piid'].'" method="POST" ><button name = "di" class="btn btn text-primary text-sm text-uppercase mr-4 mr-lg-0"><i class="fab fa-xing"></i> Remove</button></form>
                  <form action="view.php?piid='.$row['piid'].'" method="POST" ><button name = "di" class="btn btn text-primary text-sm text-uppercase mr-4 mr-lg-0"><i class="fas fa-check"></i> View</button></form>
                  </div>
                </div>
              </div>';}} ?>
            
                  </div>
                </div>
              </div>
            </div></a>
        </div>
       <form action="user-cart.php" method="POST"><center><button name="ato" class="btn btn-primary">Order Now </button></center></form>
       <?php 
       if(isset($_POST['ato'])){
         $sql1 = "SELECT * FROM cart WHERE costumeremail='$useremail'";
       // Check connection
       
       $result1 = $conn->query($sql1);
       $res1 = "";
      
       if ($result1->num_rows > 0) {
       // output data of each row
       while($row1 = $result1->fetch_assoc()) {
           $nid=$row1['id'];
           $product=$row1['product'];
           $sellername=$row1['sellername'];
           $piid=$row1['piid'];
           $food_type=$row1['food_type'];
           $price=$row1['price'];
           $email=$row1['useremail'];
           $address=$row1['selleraddress'];
           $address2=$row1['selleraddress2'];
           $state=$row1['state'];
           $des=$row1['des'];
           $sellerpincode=$row1['sellerpincode'];
           $costumerpincode=$_SESSION['pincode'];
           $costumercno=$_SESSION['cno'];
           $sellercno=$row1['sellercno'];
           $costumeraddress=$_SESSION['address'];
           $costumeremail=$_SESSION['useremail'];
           $costumername=$_SESSION['username'];
           $piid=$row1['piid'];
           $selleremail=$row1['selleremail'];
           $connect = mysqli_connect("localhost", "phpmyadmin", "root", "Hungry"); $sql = "SELECT COUNT( * ) as count FROM cart WHERE costumeremail = '$email'"; $result = mysqli_query($connect, $sql); if ($result->num_rows > 0) {
            $randomname = mysqli_query($conn, "SELECT drivermail From driver ORDER BY RAND() limit 1");
            while($driver_id = mysqli_fetch_array($randomname)) {
              $grn = $driver_id['drivermail'];
            }
            while($row = $result->fetch_assoc()) {$output = $row['count'];}}
              $insert_in_db="INSERT INTO `order`(`sellername`, `selleremail`, `sellercno`, `selleraddress`, `selleraddress2`, `product`, `price`, `type`,`state`, `zip`, `des`, `costumeraddress`, `pincode`, `dish`, `costumeremail`, `costumercno`, `costumername`, `piid`, `driver`) VALUES ('$sellername','$selleremail','$sellercno','$address','$address2','$product','$price','$food_type','$state','$sellerpincode','$des','$costumeraddress','$costumerpincode','$product','$costumeremail','$costumercno','$costumername','$piid', '$grn')";
              $query=mysqli_query($conn, $insert_in_db) or die(mysqli_error($conn));
            if($query==1){
              $income=$price/1.21;
              $income1="UPDATE `logindb` SET `income`=`income`+$income WHERE useremail='$selleremail'";
              $incomein=mysqli_query($conn, $income1) or die(mysqli_error($conn));
            }
              if($incomein == 1){
                $ourincome=$price-$income;
                
                $eincome="UPDATE `companyfund` SET `companyfund`=`companyfund`+$ourincome";
                $eincomein=mysqli_query($conn, $eincome) or die(mysqli_error($conn));
              }
                if($eincomein==1){
                  $notify="INSERT INTO `notifications`(`piid`, `nid`, `product-name`, `driver`, `mail`) VALUES ('$piid', '$nid', '$product','$grn', '$selleremail')";
                  $notice=mysqli_query($conn, $notify) or die(mysqli_error($conn));
                }
                  if($notice==1){
                    echo '<meta http-equiv="refresh" content="0.5;url=order.php">';
                  }
                
              }
          }}?>

        <!-- Pagination -->
        <nav aria-label="Page navigation example">
        
      </div>
    </section>
    <!-- Footer-->
    
    <?php include "footer.php";?> 
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