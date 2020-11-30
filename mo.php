<?php
include "required.php";
include "db_connect.php";

error_reporting(0);
?>
<?php
$email=$_SESSION['useremail'];

   $sql = "SELECT * FROM `order` WHERE costumeremail='$email'";
   // Check connection
   $result = $conn->query($sql);
  
   $res = "";
   if ($result->num_rows > 0) {
   // output data of each row
      if($row = $result->fetch_assoc()){
      echo' <section class="py-5 p-print-0">
      <div class="container">
        <div class="row mb-4 d-print-none">
          <div class="col-lg-6">
            <!-- Breadcrumbs -->
            <ol class="breadcrumb pl-0  justify-content-start">
              <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>

              <li class="breadcrumb-item active">Invoice  </li>
            </ol>
          </div>
          <div class="col-lg-6 text-lg-right">
            <button onclick="window.print()" class="btn btn-primary mr-2"><i class="fas fa-print mr-2"></i> Download PDF</button>
 
          </div>
        </div>
        <div class="card border-0 shadow shadow-print-0">
          <div class="card-header bg-gray-100 p-5 border-0 px-print-0">
            <div class="row">
              <div class="col-6 d-flex align-items-center"><h3 class="hungry">Hungry</h3></div>
              <div class="col-6 text-right">
                <h4 class="mb-0">Invoice</h4>
               
              </div> 
            </div>
          </div>
          <div class="card-body p-5 p-print-0">
            <div class="row mb-4">
              <div class="col-sm-6 pr-lg-3">
                <h2 class="h6 text-uppercase mb-4">Supplier</h2>
                <h6 class="mb-1">'.$row['sellername'].'</h6>
                <p class="text-muted">'.$row['selleraddress2'].'</p>
              </div>
              <div class="col-sm-6 pl-lg-4">
                <h2 class="h6 text-uppercase mb-4">Customer</h2>
                <h6 class="mb-1">'.$row['costumername'].'</h6>
                <p class="text-muted">'.$row['costumeraddress'].'</p>
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-md-6 pr-lg-3 text-sm">
                <div class="row">
                  <div class="col-6 text-uppercase text-muted">Your E-Mail</div>
                  <div class="col-6 text-right">'.$row['costumeremail'].'</div>
                </div>
                <div class="row">
                  <div class="col-6 text-uppercase text-muted">Bank Account Number</div>
                  <div class="col-6 text-right">None</div>
                </div>
                <div class="row">
                  <div class="col-6 text-uppercase text-muted">Payment method</div>
                  <div class="col-6 text-right">Cash On Delivery(COD)</div>
                </div>
              </div>
              <div class="col-md-6 pl-lg-4 text-sm">
                <div class="row">
                  <div class="col-6 text-uppercase text-muted">Food Arrival</div>
                  <div class="col-6 text-right">30-60 Min</div>
                </div>
                <div class="row">
                  <div class="col-6 text-uppercase text-muted">Pincode</div>
                  <div class="col-6 text-right">'.$row['pincode'].'</div>
                </div>
              </div>
            </div>
           
           
            ';
            
     }}
     ?>
     
     <div class="table-responsive text-sm mb-5">
        <table class="table table-striped">
          <thead class="bg-gray-200">
          <tr class="border-0">
              <th class="center">#</th>
              <th>Item</th>
              <th>Track Driver</th>
              <th class="text-right">Price</th>
              <th class="center">Seller Contact</th>
              <th class="center">Qty</th>
              <th class="text-right">Total</th>
            </tr>
          </thead>
          <tbody>
     <?php

     $sql1 = "SELECT * FROM `order` WHERE costumeremail='$email'";
     // Check connection
     $result1 = $conn->query($sql);
    $x=1;
    
     $res = "";
     if ($result1->num_rows > 0) {
     // output data of each row
        while($row1 = $result1->fetch_assoc()){  
          $uip = $row1['price']*1.21;
        echo' 
            <tr>
              <td class="text-center">'.$x++.'</td>
              <td class="font-weight-bold">'.$row1['product'].'</td>
              <td><a href="abdriver.php?mail='.$row1['driver'].'">'.$row1['driver'].'</a></td>
              <td class="text-right">'.$uip.' <i class="fas fa-rupee-sign"></td>
              <td class="text-center">'.$row1['sellercno'].'</td>
              <td class="text-center">1</td>
              <td class="text-right">'.$row1['price'].' <i class="fas fa-rupee-sign"></td>
            </tr>    
   
    ';
              
       }
     }
 
    
   ?>
          </tbody>
        </table>
      </div>
      <?php $connect = mysqli_connect("localhost", "phpmyadmin", "root", "Hungry"); $sql = "SELECT SUM(price) as count FROM `order` WHERE `costumeremail` = '$email'"; $result = mysqli_query($connect, $sql); if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {$output = $row['count']; $gsp=$output * 1.21;}}
          
          ?>
      <?php
        echo ' <div class="row">
         <div class="col-sm-7 col-lg-5 col-xl-4 ml-auto">
           <table class="table">
             <tbody>
               <tr class="text-sm">
                 <td class="font-weight-bold">Subtotal</td>
                 <td class="text-right">'.$output.' <i class="fas fa-rupee-sign"></td>
               </tr>
               <tr class="text-sm">
                 <td class="font-weight-bold">GST (21%)</td>
                 <td class="text-right">'.$gsp.' <i class="fas fa-rupee-sign"></td>
               </tr>
               <tr>
                 <td class="text-uppercase font-weight-bold">Total</td>
                 <td class="text-right font-weight-bold">'.$gsp.' <i class="fas fa-rupee-sign"></td>
               </tr>
             </tbody>
           </table>
         </div>
       </div>
  ';
      ?>
    </div>
   <div class="card-footer bg-gray-100 p-5 px-print-0 border-0 text-right text-sm">
      <p class="mb-0">Thank you for Shopping With Us, Hungry.</p>
    </div>
  </div>
</div>
</section>
    <!-- Footer-->
<?php include "footer.php";?>