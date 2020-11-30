<?php
include "required.php";
include "db_connect.php";
$mmmail=$_POST['mail'];
$mail = $_SESSION['drivermail'];
error_reporting(0);
$email = $_SESSION['useremail'];



?>
        <?php   
            $sql = "SELECT * FROM `driver` WHERE drivermail='$mmmail'";
            // Check connection
            $result = $conn->query($sql);
           
            $res = "";
            if ($result->num_rows > 0) {
            // output data of each row
              if($row = $result->fetch_assoc()) {
                $drivertpg = $row['drivertpg']/10;
                  echo ' 
            <section class="py-5">
            <div class="container">
              <div class="row">
                <div class="col-lg-3 mr-lg-auto">
                  <div class="card border-0 shadow mb-6 mb-lg-0">
                    <div class="card-header bg-gray-100 py-4 border-0 text-center"><h1><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                  </svg></h1>
                      <h5>'.$row['drivename'].'</h5>
                      <p class="text-muted text-sm mb-0">'.$row['drivermail'].'  </p>
                      <a href="tel:+91'.$row['drivercno'].'" class="text-muted text-sm mb-0">Call '.$row['drivename'].': '.$row['drivercno'].'  </a>
                      <p class="text-muted text-sm mb-0">Driver Experience: '.$row['drivertpg'].'  </p>
                      <p class="text-muted text-sm mb-0">Total Deliveries: '.$drivertpg.'  </p>
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
                      <h6>'.$row['drivename'].'"s Speciality</h6>
                      <ul class="card-text text-muted">
                        <li>Great Driver</li>

                      </ul>
                      <h6>'.$row['drivename'].' Provided</h6>
                      <ul class="card-text text-muted">
                      <li>Email address</li>
                      <li>Phone number</li>
                      </ul>
                        
                    </div>
                  </div>
                </div>
                <div class="col-lg-9 pl-lg-5">
                  <h1 class="hero-heading mb-0">Hello, Im '.$row['drivename'].'!</h1>
                  <div class="text-block">
                    <p> <span class="badge badge-secondary-light">Driver</span></p>
                    <p class="text-muted">Hello Im '.$row['drivename'].'. My Mail Is '.$row['drivermail'].' & I Will Serve You The Best</p>
                    </div>
                  <div class="text-block">
                    <h4 class="mb-5">'.$row['drivename'].'"s Live Deliveries</h4>
                    <div class="row">

                      
             


           ';
           
              }}


              $sql1 = "SELECT * FROM `order` WHERE `driver` = '$mmmail' ";
              // Check connection
              $result1 = $conn->query($sql1);
             
              $res1 = "";
              if ($result1->num_rows > 0) {
              // output data of each row
                while($row1 = $result1->fetch_assoc()) {
                    echo ' 
                    <div class="col-sm-6 col-lg-4 mb-30px hover-animate" data-marker-id="59c0c8e322f3375db4d89128">
                    <div class="card h-100 border-0 shadow">

                      <div class="card-body d-flex align-items-center">
                        <div class="w-100">
                          <h6 class="card-title">
                          <div class="d-flex card-subtitle mb-3">
                            <p class="flex-grow-1 mb-0 text-muted text-sm">'; if($mail==$mmmail){echo '<a class="tile-link" href="dprod.php?id='.$row1['id'].'"></a>';}else {echo '';}
                            
                           echo ''.$row1['costumeremail'].'</p>
                            
                            </p>
                          </div>
                          <p class="card-text text-muted"><span class="h4 text-primary">'.$row1['price'].'rs</span> per plate</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  </a>
                  <!-- place item-->
                
               
  
  
             ';
             
                }}
                else{echo'<center><div class="alert alert-success" role="alert">
                    Finished The Work
                  </div></center>'; }
             ?>