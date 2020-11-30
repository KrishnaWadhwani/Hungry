<?php
include "required.php";
include "db_connect.php";

error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
        .hungry{
        
          font-family: 'Pacifico', cursive;
          color: #FF5E5E;
        }
    </style>
        <meta charset="utf-8" />
        <title>Hungry.Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->


        <!-- third party css -->
        <link href="assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- third party css end -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/8a81a9a7f0.js" crossorigin="anonymous"></script>
        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="assets/css/app-modern-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />
        
    </head>

    <body class="loading" data-layout="detached" data-layout-config='{"leftSidebarCondensed":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <script>
setInterval(runfunction, 1000);
function runfunction()
{

    $.post("notify.php",
        function(data, status)
        {
            document.getElementsByName('anyClass')[0].innerHTML=data;
        }
        
        
        )
}

</script>
        <!-- Topbar Start -->
        <div class="navbar-custom topnav-navbar topnav-navbar-dark">
            <div class="container-fluid">

                <!-- LOGO -->
                <a href="homepage.php" class="topnav-logo">
                <h3 class="hungry">Hungry</h3>
                </a>

                <ul class="list-unstyled topbar-right-menu float-right mb-0">

                   
            
                   
    
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="index.html#" id="topbar-notifydrop" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="dripicons-bell noti-icon"></i>
                            <span class="noti-icon-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg" aria-labelledby="topbar-notifydrop">
    
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                    <span class="float-right">
                                      
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>
    
                            <div name="anyClass" style="max-height: 230px;" data-simplebar>
                                <!-- item-->
                                
                            </div>
    
                            <!-- All-->
                            
    
                        </div>
                    </li>

                    <li class="dropdown notification-list d-none d-sm-inline-block">
                      
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg p-0">
    
                            <div class="p-2">
                                <div class="row no-gutters">
                                    <div class="col">
                                      
                                    </div>
                
                                </div>
                            </div>
    
                        </div>
                    </li>

                    <li class="notification-list">
                        <a class="nav-link right-bar-toggle" href="javascript: void(0);">
                            <i class="dripicons-gear noti-icon"></i>
                        </a>
                    </li>
    
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" id="topbar-userdrop" href="index.html#" role="button" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="account-user-avatar"> 
                            <svg width="1em" height="2em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" class="rounded-circle" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                  </svg>
                  
                            </span>
                            <span>
                            <?php $username=$_SESSION['username']; echo' <span class="account-user-name">'.$username.'</span>';?>
                                <span class="account-position">Seller</span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown" aria-labelledby="topbar-userdrop">
                            <!-- item-->
                            <div class=" dropdown-header noti-title">
                               <?php $username=$_SESSION['username']; echo ' <h6 class="text-overflow m-0">Welcome '.$username.'</h6>';?>
                            </div>
    
                        
                            <!-- item-->
                            <a href="logout.php" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout mr-1"></i>
                                <span>Logout</span>
                            </a>
    
                        </div>
                    </li>

                </ul>
                <a class="button-menu-mobile disable-btn">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <div class="app-search dropdown">
                    
                    <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
             
                            </a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!-- end Topbar -->
        
        <!-- Start Content-->
        <div class="container-fluid">

            <!-- Begin page -->
            <div class="wrapper">

                <!-- ========== Left Sidebar Start ========== -->
                <div class="left-side-menu left-side-menu-detached">

                    <div class="leftbar-user">
                        <a href="javascript: void(0);">
                        <h1><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                  </svg></h1>
                            <?php echo '<span class="leftbar-user-name">'.$username.'</span>';?>
                            <?php $income = $_SESSION['income']; echo '<span class="leftbar-user-name">Income: '.$income.' <i class="fas fa-rupee-sign"></i></span>';?>
                        </a>
                    </div>

                    <!--- Sidemenu -->
                    <ul class="metismenu side-nav">

                        <li class="side-nav-title side-nav-item">Navigation</li>

                        <li class="side-nav-item">
                            <a href="homepage.php" class="side-nav-link">
                    
                                <span class="badge badge-info badge-pill float-right">New Items</span>
                                <span> Homepage </span>
                            </a>
                           

                        <li class="side-nav-title side-nav-item">More</li>

                        <li class="side-nav-item">
                            <a href="user-add-0.php" class="side-nav-link">
                               
                                <span> Sell On Hungry </span>
                            </a>
                        </li>

                       
                    </ul>

                 
                    <!-- end Help Box -->
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>
                    <!-- Sidebar -left -->

                </div>
                <!-- Left Sidebar End -->

                <div class="content-page">
                    <div class="content">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                       
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->    

                      

         
                        <div class="row">
                            <div class="col-xl-6 col-lg-12 order-lg-2 order-xl-1">
                                <div class="card">
                                    <div class="card-body">
                                        <button onclick="window.print()" class="btn btn-sm btn-link float-right mb-3">Export
                                           
                                        </button>
                                        <h4 class="header-title mt-2">Your Products</h4>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap table-hover mb-0">
                                                <tbody>
                                                <?php $email = $_SESSION['useremail']; 
                                                $sql = "SELECT * FROM `selldb` WHERE `email` = '$email' ORDER BY id DESC";
                                                    // Check connection
                                                    $result = $conn->query($sql);
                                                    
                                                    $res = "";
                                                    if ($result->num_rows > 0) {
                                                    // output data of each row
                                                         while($row = $result->fetch_assoc()) {
                                                             
                                                            echo'
                                                             <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1 font-weight-normal">'.$row['dish'].'</h5>
                                                            <span class="text-muted font-13">'.$row['doi'].'</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 font-weight-normal">'.$row['price'].' <i class="fas fa-rupee-sign"></i></h5>
                                                            <span class="text-muted font-13">Price</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 font-weight-normal">'.$row['zip'].'</h5>
                                                            <span class="text-muted font-13">Pincode</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 font-weight-normal">'.$row['type'].'</h5>
                                                            <span class="text-muted font-13">Food Type</span>
                                                        </td>
                                                        <td>
                                                        <h5 class="font-14 my-1 font-weight-normal">'.$row['id'].'</h5>
                                                        <span class="text-muted font-13">PIID</span>
                                                    </td>
                                                        <td>
                                                       <form action="dashboard.php" method="post"><input type="text" name = "rem" value="'.$row['id'].'" hidden></input><button type="submit" class="btn btn-danger" name="remove">Remove</button></form>
                                                    </td>
                                                    </tr>';}}
                                                    if(isset($_POST['remove'])){
                                                       $rem = $_POST['rem'];
                                                        $sql11 = "DELETE FROM `selldb` WHERE id='$rem' ";
                                                        // Check connection
                                                        $result11 = $conn->query($sql11);
                                                        if($result11==1){
                                                            $sql111 = "DELETE FROM `tbl_images` WHERE id='$rem' ";
                                                            // Check connection
                                                            $result111 = $conn->query($sql111);
                                                        }
                                            
                                                        
                                                       }
                                                    
                                                    
                                                    ?>
                                                   
                                                   

                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

               
                                                </div>
                                            </div>
                                            <!-- end timeline -->
                                        </div> <!-- end slimscroll -->
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card-->
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->
    
                        
                    </div> <!-- End Content -->

                    <!-- Footer Start -->
                  
                    <!-- end Footer -->

                </div> <!-- content-page -->

            </div> <!-- end wrapper-->
        </div>
        <!-- END Container -->


        <!-- Right Sidebar -->
        <div class="right-bar">

            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <div class="rightbar-content h-100" data-simplebar>

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                    </div>

                    <!-- Settings -->
                    <h5 class="mt-3">Color Scheme</h5>
                    <hr class="mt-1" />

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="color-scheme-mode" value="light"
                            id="light-mode-check" checked />
                        <label class="custom-control-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="color-scheme-mode" value="dark"
                            id="dark-mode-check" />
                        <label class="custom-control-label" for="dark-mode-check">Dark Mode</label>
                    </div>

                  

                    <button class="btn btn-primary btn-block mt-4" id="resetBtn">Reset to Default</button>

                    
                </div> <!-- end padding-->

            </div>
        </div>

        <div class="rightbar-overlay"></div>
        <!-- /Right-bar -->


        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

        <!-- third party js -->
        <script src="assets/js/vendor/apexcharts.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="assets/js/pages/demo.dashboard.js"></script>
        <!-- end demo js-->
        
    </body>
</html>
