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

            <!-- Slides-->
           <?php
           $pincode=$_GET['location'];
           $q=$_GET['search'];
           $filter=$_GET['filter'];
           include "db_connect.php";
           $sql = "SELECT * FROM selldb INNER JOIN tbl_images ON tbl_images.id = selldb.id WHERE selldb.zip = '$pincode' AND dish LIKE '$q' ORDER BY tbl_images.id DESC";
           // Check connection
           $result = $conn->query($sql);
          
           $res = "";
           if ($result->num_rows > 0) {
           // output data of each row
             while($row = $result->fetch_assoc()) {
               $res='
               
               <div class="media text-muted pt-3">
               <img class="bd-placeholder-img mr-2 rounded" src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="32" width="32" class="img-thumnail"/>
               <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
               <strong class="d-block text-gray-dark">@'.$row["username"].'.'.$row["dish"].'</strong>'
               .$row["des"].' <a name="atc" href="view.php?piid='.$row["id"].'">View The Item</a>
               </p>
             </div>';
             echo $res;
              }}
              elseif(empty($filter)){
                echo "<center><h2 class='nia'>Sorry ".$q." Is Not Available In Hungry ";
                echo"<a href='homepage.php'>Homepage</a></h2></center>";
            }
              
       
              $pincode1=$_SESSION['pincode'];
              
              include "db_connect.php";
              $sqlf = "SELECT * FROM selldb INNER JOIN tbl_images ON tbl_images.id = selldb.id WHERE selldb.zip = '$pincode1' AND selldb.type LIKE '$filter' ORDER BY tbl_images.id DESC";
              // Check connection
              $resultf = $conn->query($sqlf);
             
              $resf = "";
              if ($resultf->num_rows > 0) {
              // output data of each row
                while($rowf = $resultf->fetch_assoc()) {
                  $resf='
                  <div class="media text-muted pt-3">
               <img class="bd-placeholder-img mr-2 rounded" src="data:image/jpeg;base64,'.base64_encode($rowf['name'] ).'" height="32" width="32" class="img-thumnail"/>
               <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
               <strong class="d-block text-gray-dark">@'.$rowf["username"].'.'.$rowf["dish"].'</strong>'
               .$rowf["des"].' <a name="atc" href="view.php?piid='.$rowf["id"].'">View The Item</a>
               </p>
             </div>';
                  echo $resf;
              }
              
            }
            elseif(empty($q)){
                echo "<center><h2 class='nia'>Sorry ".$filter." Type Of Food Is Not Available In Hungry, ";
                echo"<a href='homepage.php'>Homepage</a></h2></center>";
            }
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