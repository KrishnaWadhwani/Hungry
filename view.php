<?php
$piid=(int)($_GET['piid']);
include "required.php";
include "db_connect.php";
$email = $_SESSION['useremail'];
if(empty($piid)){
  header("Location: homepage.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hungry.View</title>
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
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="">
     <!-- Leaflet Maps-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="">
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
     <?php include "navbar.php";?>
      <!-- /Navbar -->
    </header>
    <section>
    
          <?php
            $sql = "SELECT * FROM selldb INNER JOIN tbl_images ON tbl_images.id = selldb.id WHERE selldb.id = '$piid'";
            // Check connection
            $result = $conn->query($sql);
           
            $res = "";
            if ($result->num_rows > 0) {
            // output data of each row
              while($row = $result->fetch_assoc()) {
                $mail=$row['email'];
                $uip = $row['price'] * 1.21;
            echo ' 
            <div class="container-fluid">               
            <div class="row">
              <div class="col-lg-7 col-xl-5 px-4 pb-4 pl-xl-5 pr-xl-5">
                <section class="mx-n4 mx-xl-n5 mb-4 mb-xl-5">
                  <!-- Slider main container-->
                  <div class="swiper-container booking-detail-slider">
                    <!-- Additional required wrapper-->
                    <div class="swiper-wrapper">
                      <!-- Slides-->
                      <img class="img-fluid" src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" />
                      
                    </div>
                    <div class="swiper-pagination swiper-pagination-white"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                    <div class="swiper-button-next swiper-button-white">   </div>
                  </div>
                </section>
                <!-- Breadcrumbs -->
                <ol class="breadcrumb pl-0  justify-content-start">
                  <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
                  <li class="breadcrumb-item active">'.$row['dish'].'   </li>
                </ol>
                <div class="text-block">
                  <p class="subtitle">Sold By '.$row['username'].'</p>
                  <h1 class="hero-heading mb-3">'.$row['dish'].'</h1>
                </div>
                <div class="text-block">
            
                  <div class="row mb-3">
                    
                </div>
                <div class="text-block">
                  <div class="row">
                    <div class="col-sm">
                      <h6>Seller Address</h6>
                      <p class="text-muted">'.$row['address2'].'</p>
                    </div>
                    <div class="col-sm">
                      <h6>Phone</h6>
                      <a href="tel:+91'.$row['cno'].'" class="text-muted">+91'.$row['cno'].'</a>
                    </div>
                  </div>
                </div>
                <div class="text-block">
                  <div class="media align-items-center mb-3">
                    <div class="media-body">
                     
                      
                    </div>
                  </div>
                </div>
         
        
                <div class="text-block">
                  <div class="row">
                    <div class="col">
                      <h6> Total cost</h6>
                      <p class="text-muted">'.$uip.' rs</p>
                    </div>
                    <div class="col align-self-center">';?>
                      <?php if($mail==$email){echo '<a href = "dashboard.php">Sorry You Cant Add To Cart This Item</a>';} else{echo '<p class="text-right d-print-none"><form action="cart.php?id='.$row['id'].'" method="POST"><button name="atc" class="btn btn-link text-muted" ><i class="fas fa-shopping-cart"></i> Add To Cart</button></form></p>';} ?>
                    <?php echo '</div>
                  </div>
                </div>
                <div class="text-block">
                  <h6 class="mb-4">Things to keep in mind</h6>
                  <ul class="list-unstyled">
                    <li class="mb-2"> 
                      <div class="media align-items-center mb-3">
                        <div class="icon-rounded icon-rounded-sm bg-secondary-light mr-4"><i class="fa fas fa-child text-secondary fa-fw text-center"></i></div>
                        <div class="media-body"><span class="text-sm">This Is Not Sold By Hungry So We Can Not Assure How Good Quality Food Will Come But Our Driver Will Check The Food</span></div>
                      </div>
                    </li>
                    <li class="mb-2"> 
                      <div class="media align-items-center mb-3">
                        <div class="icon-rounded icon-rounded-sm bg-secondary-light mr-4"><i class="fa fas fa-glass-cheers text-secondary fa-fw text-center"></i></div>
                        <div class="media-body"><span class="text-sm">Do Not Call Or Email The Seller If You Did And Misbehave With Seller Or Rebel Of This We Are Not Resposible</span></div>
                      </div>
                    </li>
                    <li class="mb-2"> 
                      <div class="media align-items-center mb-3">
                        <div class="icon-rounded icon-rounded-sm bg-secondary-light mr-4"><i class="fa fa-smoking-ban text-secondary fa-fw text-center"></i></div>
                        <div class="media-body"><span class="text-sm">Only Call To Seller When There Is An Emergency</span></div>
                      </div>
                    </li>
                    <li class="mb-2"> 
                      <div class="media align-items-center mb-3">
                        <div class="icon-rounded icon-rounded-sm bg-secondary-light mr-4"><i class="fa fa-cat text-secondary fa-fw text-center"></i></div>
                        <div class="media-body"><span class="text-sm">If Driver Misbehaved With You You Can Contact Our Costumer Care</span></div>
                      </div>
                    </li>
                  </ul>
              

                </div>
               
              </div>
              <div class="col-lg-5 col-xl-7 map-side-lg px-lg-0">
              <div><iframe id="iframemap" src="https://maps.google.com/maps?q='.$row['address2'].'&amp;ie=UTF8&amp;iwloc=&amp;output=embed" width="100%" height="592" frameborder="0" scrolling="no"></iframe><div style="color: #333; font-size: 14px; font-family: Arial, Helvetica, sans-serif; text-align: right; padding: 10px;"></div>
              </div>
            </div>
          </div>
          </div>
          </div>';
              }}
           ?>
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
    <!-- Map-->
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
    <!-- Available tile layers-->
    <script src="js/map-layers.f6cf9b57.js"> </script>
    <script src="js/map-detail.ecc97be1.js"></script>
    <script>
      createDetailMap({
          mapId: 'detailMap',
          mapZoom: 14,
          mapCenter: [40.732346, -74.0014247],
          circleShow: true,
          circlePosition: [40.732346, -74.0014247]
      })
      
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-date-range-picker/0.19.0/jquery.daterangepicker.min.js"> </script>
    <script src="js/datepicker-detail.111bc2ff.js">   </script>
  </body>
</html>