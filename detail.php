<?php
include "required.php";
include "db_connect.php";
$mail = strval($_GET['mail']);



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hungry.Seller-Detail</title>
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
    <?php
            $sql = "SELECT * FROM selldb WHERE email = '$mail' ";
            // Check connection
            $result = $conn->query($sql);
           
            $res = "";
            if ($result->num_rows > 0) {
            // output data of each row
              if($row = $result->fetch_assoc()) {
                  echo ' 
            <section class="py-5">
            <div class="container">
              <div class="row">
                <div class="col-lg-3 mr-lg-auto">
                  <div class="card border-0 shadow mb-6 mb-lg-0">
                    <div class="card-header bg-gray-100 py-4 border-0 text-center"><h1><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                  </svg></h1>
                      <h5>'.$row['username'].'</h5>
                      <p class="text-muted text-sm mb-0">'.$row['email'].'  </p>
                    </div>
                    <div class="card-body p-4">
                    
                      <div class="media align-items-center mb-3">
                        <div class="icon-rounded icon-rounded-sm bg-primary-light mr-2">
                          <svg class="svg-icon text-primary svg-icon-md">
                            <use xlink:href="#checkmark-1"> </use>
                          </svg>
                        </div>
                        <div class="media-body">
                          <p class="mb-0">Verified</p>
                        </div>
                      </div>
                      <hr>
                      <h6>'.$row['username'].'"s Speciality</h6>
                      <ul class="card-text text-muted">
                        <li>Great Chef</li>

                      </ul>
                      <h6>'.$row['username'].' Provided</h6>
                      <ul class="card-text text-muted">
                      <li>Email address</li>
                      <li>Phone number</li>
                      </ul>

                    </div>
                  </div>
                </div>
                <div class="col-lg-9 pl-lg-5">
                  <h1 class="hero-heading mb-0">Hello, Im '.$row['username'].'!</h1>
                  <div class="text-block">
                    <p> <span class="badge badge-secondary-light">Chef</span></p>
                    <p class="text-muted">Hello Im '.$row['username'].'. My Mail Is '.$row['email'].' & I Will Serve You The Best</p>
                    </div>
                  <div class="text-block">
                    <h4 class="mb-5">Live From '.$row['username'].'</h4>
                    <div class="row">

                      
             


           ';
           
              }}


              $sql1 = "SELECT * FROM selldb INNER JOIN tbl_images ON tbl_images.id = selldb.id WHERE email = '$mail' ";
              // Check connection
              $result1 = $conn->query($sql1);
             
              $res1 = "";
              if ($result1->num_rows > 0) {
              // output data of each row
                while($row1 = $result1->fetch_assoc()) {
                    echo ' 
                    <div class="col-sm-6 col-lg-4 mb-30px hover-animate" data-marker-id="59c0c8e322f3375db4d89128">
                    <div class="card h-100 border-0 shadow">
                      <div class="card-img-top overflow-hidden gradient-overlay"> <img class="img-fluid" src="data:image/jpeg;base64,'.base64_encode($row1['name'] ).'" alt="Cute Quirky Garden apt, NYC adjacent"/><a class="tile-link" href="view.php?piid='.$row1['id'].'"></a>
                        <div class="card-img-overlay-bottom z-index-20">
                          <div class="media text-white text-sm align-items-center">
                            <div class="media-body">'.$row1['username'].'</div>
                          </div>
                        </div>
                        <div class="card-img-overlay-top text-right"><a class="card-fav-icon position-relative z-index-40" href="javascript: void();"> 
                            <svg class="svg-icon text-white">
                              <use xlink:href="#heart-1"> </use>
                            </svg></a></div>
                      </div>
                      <div class="card-body d-flex align-items-center">
                        <div class="w-100">
                          <h6 class="card-title"><a class="text-decoration-none text-dark" href="view.php?piid='.$row1['id'].'">'.$row1['dish'].'</a></h6>
                          <div class="d-flex card-subtitle mb-3">
                            <p class="flex-grow-1 mb-0 text-muted text-sm">'.$row1['email'].'</p>
                            
                            </p>
                          </div>
                          <p class="card-text text-muted"><span class="h4 text-primary">'.$row1['price'].'rs</span> per plate</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- place item-->
                
               
  
  
             ';
             
                }}
             ?>
          
         
      
      
  
          
    <!-- Footer-->

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