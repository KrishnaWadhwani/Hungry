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
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"">
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
    <section id="main23" class="hero-home">
      <div class="swiper-container hero-slider">
        <div class="swiper-wrapper dark-overlay">
          <div class="swiper-slide" style="background-image:url(food.jpg)"></div>
          <div class="swiper-slide" style="background-image:url(food2.jpg)"></div>
          <div class="swiper-slide" style="background-image:url(sweet1.jpg)"></div>
          <div class="swiper-slide" style="background-image:url(sour1.jpg)"></div>
        </div>
      </div>
      <div class="container py-6 py-md-7 text-white z-index-20">
        <div class="row">
          <div class="col-xl-10">
            <div class="text-center text-lg-left">
              <p class="subtitle letter-spacing-4 mb-2 text-secondary text-shadow">Best Food From Indian Moms</p>
              <h1 class="display-3 font-weight-bold text-shadow">Hungry</h1>
            </div>
            <div class="search-bar mt-5 p-3 p-lg-1 pl-lg-4">
              <form action="searchfood.php?" autocomplete="off">
                <div class="row">
                  <div class="col-lg-4 d-flex align-items-center form-group">
                    <input class="form-control border-0 shadow-0" type="text" name="search" placeholder="Are You Hungry ?">
                  </div>
                  <div class="col-lg-3 d-flex align-items-center form-group">
                    <div class="input-label-absolute input-label-absolute-right w-100">
                      <label class="label-absolute" for="location"><i class="fa fa-crosshairs"></i><span class="sr-only">City</span></label>
                      <input class="form-control border-0 shadow-0" type="text" name="location" placeholder = "Pincode" value="<?php $pincode=$_SESSION['pincode']; echo $pincode ?>" id="location">
                    </div>
                  </div>
                  <div class="col-lg-3 d-flex align-items-center form-group no-divider">
                    <select class="selectpicker" title="Categories" onChange="window.location.href=this.value" data-style="btn-form-control">
                      <option value="searchfood.php?filter=Veg">Veg</option>
                      <option value="searchfood.php?filter=Non-Veg">Non Veg</option>
                      <option value="searchfood.php?filter=Spicy">Spicy</option>
                      <option value="searchfood.php?filter=Sweet">Sweet</option>
                    </select>
                  </div>
                  <div class="col-lg-2">
                    <button class="btn btn-primary btn-block rounded-xl h-100" type="submit">Search </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-6 bg-gray-100">
      <div class="container">
        <div class="text-center pb-lg-4">
          <p class="subtitle text-secondary">Healthy, Hygienic, Home-cooked meals at your door-step</p>
          <h2 class="mb-5">Order Food Now</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-3 mb-lg-0 text-center">
            <div class="px-0 px-lg-3">
              <div class="icon-rounded bg-primary-light mb-3">
                <svg class="svg-icon text-primary w-2rem h-2rem">
                  <use xlink:href="#destination-map-1"> </use>
                </svg>
              </div>
              <h3 class="h5">Find the perfect price for you</h3>
              <p class="text-muted">Our Perfect Algorithms Find Best Price For You From Our Database And Servers</p>
            </div>
          </div>
          <div class="col-lg-4 mb-3 mb-lg-0 text-center">
            <div class="px-0 px-lg-3">
              <div class="icon-rounded bg-primary-light mb-3">
                <svg class="svg-icon text-primary w-2rem h-2rem">
                  <use xlink:href="#pay-by-card-1"> </use>
                </svg>
              </div>
              <h3 class="h5">Order with confidence</h3>
              <p class="text-muted">Just Pay The Incentive Your Food Will Deliverd To You If You Are Not Happy With The Recived Product We Will Refund Your Money</p>
            </div>
          </div>
          <div class="col-lg-4 mb-3 mb-lg-0 text-center">
            <div class="px-0 px-lg-3">
              <div class="icon-rounded bg-primary-light mb-3">
                <svg class="svg-icon text-primary w-2rem h-2rem">
                  <use xlink:href="#heart-1"> </use>
                </svg>
              </div>
              <h3 class="h5">Enjoy your food</h3>
              <p class="text-muted">After The Delivery You Can Enjoy Your Food In A Peacefull Nature With Your Family</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-6">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-8">
            <p class="subtitle text-primary">eat like a local</p>
            <h2>Our guides</h2>
          </div>
          <div class="col-md-4 d-lg-flex align-items-center justify-content-end"></div>
        </div>
        <div class="swiper-container guides-slider mx-n2 pt-3">
          <!-- Additional required wrapper-->
          <div class="swiper-wrapper pb-5">
            <!-- Slides-->
            <div class="swiper-slide h-auto px-2">
              <div class="card card-poster gradient-overlay hover-animate mb-4 mb-lg-0"><a class="tile-link" href="searchfood.php?filter=Veg"></a><img class="bg-image" src="food2.jpg" alt="Card image">
                <div class="card-body overlay-content">
                  <h6 class="card-title text-shadow text-uppercase">Vegetarian</h6>
                  <p class="card-text text-sm">Salad, Dosa ETC</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto px-2">
              <div class="card card-poster gradient-overlay hover-animate mb-4 mb-lg-0"><a class="tile-link" href="searchfood.php?filter=Non-Veg"></a><img class="bg-image" src="meat.jpg" alt="Card image">
                <div class="card-body overlay-content">
                  <h6 class="card-title text-shadow text-uppercase">Non Veg</h6>
                  <p class="card-text text-sm">Meat, Fish ETC</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto px-2">
              <div class="card card-poster gradient-overlay hover-animate mb-4 mb-lg-0"><a class="tile-link" href="searchfood.php?filter=Sweet"></a><img class="bg-image" src="sweet1.jpg" alt="Card image">
                <div class="card-body overlay-content">
                  <h6 class="card-title text-shadow text-uppercase">Sweet</h6>
                  <p class="card-text text-sm">City of hundred towers</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto px-2">
              <div class="card card-poster gradient-overlay hover-animate mb-4 mb-lg-0"><a class="tile-link" href="searchfood.php?filter=Spicy"></a><img class="bg-image" src="nonveg.jpg" alt="Card image">
                <div class="card-body overlay-content">
                  <h6 class="card-title text-shadow text-uppercase">Spicy</h6>
                  <p class="card-text text-sm">Chowmein, French-Fries ETC</p>
                </div>
              </div>
            </div>
           
         
          </div>
          <div class="swiper-pagination d-md-none"> </div>
        </div>
      </div>
    </section>
    <section class="py-6 bg-gray-100"> 
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-8">
            <p class="subtitle text-secondary">Hurry up, these are just for you.        </p>
            <h2>Suggestions</h2>
          </div>
          <div class="col-md-4 d-lg-flex align-items-center justify-content-end"></div>
        </div>
        <!-- Slider main container-->
        <div class="swiper-container swiper-container-mx-negative swiper-init pt-3" data-swiper="{&quot;slidesPerView&quot;:4,&quot;spaceBetween&quot;:20,&quot;loop&quot;:true,&quot;roundLengths&quot;:true,&quot;breakpoints&quot;:{&quot;1200&quot;:{&quot;slidesPerView&quot;:3},&quot;991&quot;:{&quot;slidesPerView&quot;:2},&quot;565&quot;:{&quot;slidesPerView&quot;:1}},&quot;pagination&quot;:{&quot;el&quot;:&quot;.swiper-pagination&quot;,&quot;clickable&quot;:true,&quot;dynamicBullets&quot;:true}}">
          <!-- Additional required wrapper-->
          <div class="swiper-wrapper pb-5">
            <!-- Slides-->
           <?php
             $sql = "SELECT * FROM selldb INNER JOIN tbl_images ON tbl_images.id = selldb.id WHERE selldb.zip = '$pincode' ORDER BY tbl_images.id DESC";
             // Check connection
             $result = $conn->query($sql);
            
             $res = "";
             if ($result->num_rows > 0) {
             // output data of each row
               while($row = $result->fetch_assoc()) {
                $uip=$row['price']*1.21;
            echo ' <div class="swiper-slide h-auto px-2">
            <!-- place item-->
            <div class="w-100 h-100 hover-animate" data-marker-id="59c0c8e322f3375db4d89128">
              <div class="card h-100 border-0 shadow">
                <div class="card-img-top overflow-hidden gradient-overlay"> <img class="img-fluid"  src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" /><a class="tile-link" href="view.php?piid='.$row['id'].'"></a>
                  <div class="card-img-overlay-bottom z-index-20">
                    <div class="media text-white text-sm align-items-center">
                      <div class="media-body">'.$row['username'].'</div>
                    </div>
                  </div>
                  <div class="card-img-overlay-top text-right"><a class="card-fav-icon position-relative z-index-40" href="javascript:style.color = "blue";"> 
                      <svg id="" class="svg-icon text-white">
                        <use xlink:href="#heart-1"> </use>
                      </svg></a></div>
                </div>
                <div class="card-body d-flex align-items-center">
                  <div class="w-100">
                    <h6 class="card-title"><a class="text-decoration-none text-dark" href="view.php?piid='.$row['id'].'">'.$row['dish'].'</a></h6>
                    <div class="d-flex card-subtitle mb-3">
                      <p class="flex-grow-1 mb-0 text-muted text-sm">'.$row['des'].'</p>
                                                  
                      </p>
                    </div>
                    <p class="card-text text-muted"><span class="h4 text-primary"> <i class="fas fa-rupee-sign"></i> '.$uip.'</span>  Per Plate</p>
                  </div>
                </div>
              </div>
            </div>
          </div>';
              }}
           ?>
          <!-- If we need pagination-->
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- Divider Section-->
    <section class="py-7 position-relative dark-overlay"><img class="bg-image" src="food2.jpg" alt="">
      <div class="container">
        <div class="overlay-content text-white py-lg-5">
          <h3 class="display-3 font-weight-bold text-serif text-shadow mb-5">Ready for the best food?</h3><a class="btn btn-light" href="#main23">Get started</a>
        </div>
      </div>
    </section>
    <section class="py-7">
      <div class="container">
        <div class="text-center">
          <p class="subtitle text-primary">Testimonials</p>
          <h2 class="mb-5">Our dear customers said about us</h2>
        </div>
        <!-- Slider main container-->
        <div class="swiper-container testimonials-slider testimonials">
          <!-- Additional required wrapper-->
          <div class="swiper-wrapper pt-2 pb-5">
            <!-- Slides-->
            <div class="swiper-slide px-3">
              <div class="testimonial card rounded-lg shadow border-0">
                
                <div class="text">
                  <div class="testimonial-quote"><i class="fas fa-quote-right"></i></div>
                  <p class="testimonial-text">I Have Heard About Hungry In An Ad And I Went To Hungry Then Ordered Pizza And The Food, Packing And Delivery Boy Are Very Great Hats Off To Hungry Great Food Ordering Brand</p><strong>Sonu</strong>
                </div>
              </div>
            </div>
            <div class="swiper-slide px-3">
              <div class="testimonial card rounded-lg shadow border-0">
               
                <div class="text">
                  <div class="testimonial-quote"><i class="fas fa-quote-right"></i></div>
                  <p class="testimonial-text">I Live In PG In Bombay And I Have Daily Tention Of Making Food After Studing The Hungry Changed My Life It Just Give Great Food At Great Price And Food Quality Is Also Good So Hungry Is Great For Me</p><strong>Aarav</strong>
                </div>
              </div>
            </div>
          
           
          <div class="swiper-pagination">     </div>
        </div>
      </div>
    </section>
    <section class="py-6 bg-gray-100"> 
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-8">
            <p class="subtitle text-secondary">Only For You From <?php echo $pincode; ?></p>
            <h2>Just Made For You</h2>
          </div>
          <div class="col-md-4 d-md-flex align-items-center justify-content-end"></div>
        </div>
        <div class="row">
          <!-- blog item-->
         <?php
          $sql1 = "SELECT * FROM selldb INNER JOIN tbl_images ON tbl_images.id = selldb.id WHERE zip = '$pincode' ORDER BY tbl_images.id DESC LIMIT 3";
            
         $result1 = $conn->query($sql1);
           
         
         if ($result1->num_rows > 0) {
          // output data of each row
            while($row1 = $result1->fetch_assoc()) {
              
          echo '<div class="col-lg-4 col-sm-6 mb-4 hover-animate">
          <div class="card shadow border-0 h-100"><a href="view.php?piid='.$row1['id'].'"><img class="img-fluid" src="data:image/jpeg;base64,'.base64_encode($row1['name'] ).'" /><a class="tile-link" href="view.php?piid='.$row1['id'].'"></a>
            <div class="card-body"><a class="text-uppercase text-muted text-sm letter-spacing-2" href="view.php?piid='.$row['id'].'">'.$row1['type'].'</a>
              <h5 class="my-2"><a class="text-dark" href="view.php?piid='.$row1['id'].'">'.$row1['dish'].'          </a></h5>
              <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i>'.$row1['doi'].'</p>
              <p class="my-2 text-muted text-sm">'.$row1['des'].'</p><a class="btn btn-link pl-0" href="view.php/piid='.$row1['id'].'">View more<i class="fa fa-long-arrow-alt-right ml-2"></i></a>
            </div>
          </div>
        </div>';
            }}

         ?>
          
        </div>
      </div>
    </section>
    <!-- Instagram-->
    <section>
      <div class="container-fluid px-0">
        <div class="swiper-container instagram-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide overflow-hidden"><img class="img-fluid hover-scale" src="https://d19m59y37dris4.cloudfront.net/directory/1-6/img/instagram/instagram-1.jpg" alt=" "></div>
            <div class="swiper-slide overflow-hidden"><img class="img-fluid hover-scale" src="https://d19m59y37dris4.cloudfront.net/directory/1-6/img/instagram/instagram-1.jpg" alt=" "></div>
            <div class="swiper-slide overflow-hidden"><img class="img-fluid hover-scale" src="https://d19m59y37dris4.cloudfront.net/directory/1-6/img/instagram/instagram-2.jpg" alt=" "></div>
            <div class="swiper-slide overflow-hidden"><img class="img-fluid hover-scale" src="https://d19m59y37dris4.cloudfront.net/directory/1-6/img/instagram/instagram-3.jpg" alt=" "></div>
            <div class="swiper-slide overflow-hidden"><img class="img-fluid hover-scale" src="https://d19m59y37dris4.cloudfront.net/directory/1-6/img/instagram/instagram-4.jpg" alt=" "></div>
            <div class="swiper-slide overflow-hidden"><img class="img-fluid hover-scale" src="https://d19m59y37dris4.cloudfront.net/directory/1-6/img/instagram/instagram-5.jpg" alt=" "></div>
            <div class="swiper-slide overflow-hidden"><img class="img-fluid hover-scale" src="https://d19m59y37dris4.cloudfront.net/directory/1-6/img/instagram/instagram-6.jpg" alt=" "></div>
            <div class="swiper-slide overflow-hidden"><img class="img-fluid hover-scale" src="https://d19m59y37dris4.cloudfront.net/directory/1-6/img/instagram/instagram-7.jpg" alt=" "></div>
            <div class="swiper-slide overflow-hidden"><img class="img-fluid hover-scale" src="https://d19m59y37dris4.cloudfront.net/directory/1-6/img/instagram/instagram-8.jpg" alt=" "></div>
            <div class="swiper-slide overflow-hidden"><img class="img-fluid hover-scale" src="https://d19m59y37dris4.cloudfront.net/directory/1-6/img/instagram/instagram-9.jpg" alt=" "></div>
            <div class="swiper-slide overflow-hidden"><img class="img-fluid hover-scale" src="https://d19m59y37dris4.cloudfront.net/directory/1-6/img/instagram/instagram-10.jpg" alt=" "></div>
            <div class="swiper-slide overflow-hidden"><img class="img-fluid hover-scale" src="https://d19m59y37dris4.cloudfront.net/directory/1-6/img/instagram/instagram-11.jpg" alt=" "></div>
            <div class="swiper-slide overflow-hidden"><img class="img-fluid hover-scale" src="https://d19m59y37dris4.cloudfront.net/directory/1-6/img/instagram/instagram-12.jpg" alt=" "></div>
            <div class="swiper-slide overflow-hidden"><img class="img-fluid hover-scale" src="https://d19m59y37dris4.cloudfront.net/directory/1-6/img/instagram/instagram-13.jpg" alt=" "></div>
            <div class="swiper-slide overflow-hidden"><img class="img-fluid hover-scale" src="https://d19m59y37dris4.cloudfront.net/directory/1-6/img/instagram/instagram-14.jpg" alt=" "></div>
            <div class="swiper-slide overflow-hidden"><img class="img-fluid hover-scale" src="https://d19m59y37dris4.cloudfront.net/directory/1-6/img/instagram/instagram-10.jpg" alt=" "></div>
            <div class="swiper-slide overflow-hidden"><img class="img-fluid hover-scale" src="https://d19m59y37dris4.cloudfront.net/directory/1-6/img/instagram/instagram-11.jpg" alt=" "></div>
            <div class="swiper-slide overflow-hidden"><img class="img-fluid hover-scale" src="https://d19m59y37dris4.cloudfront.net/directory/1-6/img/instagram/instagram-12.jpg" alt=" "></div>
            <div class="swiper-slide overflow-hidden"><img class="img-fluid hover-scale" src="https://d19m59y37dris4.cloudfront.net/directory/1-6/img/instagram/instagram-13.jpg" alt=" "></div>
            <div class="swiper-slide overflow-hidden"><img class="img-fluid hover-scale" src="https://d19m59y37dris4.cloudfront.net/directory/1-6/img/instagram/instagram-14.jpg" alt=" "></div>
          </div>
        </div>
      </div>
    </section>
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