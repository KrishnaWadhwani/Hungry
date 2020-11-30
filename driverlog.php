<?php
error_reporting(0);
include "db_connect.php";
$login = false;
$showError = false;
if(isset($_POST['submit'])){
    $drivername = $_POST['drivename'];
    $driver_mail = $_POST['drivermail'];
 
    $password = $_POST['password'];
    $cart = "SELECT * FROM driver WHERE drivermail='$driver_mail'";
    $cart_res = $conn->query($cart);
     
    $resc = "";
    if ($cart_res->num_rows > 0) {
    // output data of each row
      while($roww = $cart_res->fetch_assoc()) {
          $address=$roww['driveraddr'];
          $drivercno=$roww['drivercno'];
          $pincode=$roww['pincode'];
          $tpg=$roww['drivertpg'];
          if (!empty($drivername) || !empty($driver_mail) || !empty($password)) {
        
            $sql = "Select * from driver where drivename='$drivername' AND password='$password' AND drivermail='$driver_mail' AND drivercno = '$drivercno' AND pincode = '$pincode'";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            
            if ($num){
                $login = true;
                session_start();
                session_regenerate_id();
                $_SESSION['loggedin'] = true;
                $_SESSION['drivename']=$drivername;
                $_SESSION['drivermail']=$driver_mail;
                $_SESSION['drivercno']=$cno;
                $_SESSION['driveraddr']=$address;
                $_SESSION['drivertpg']=$driver_mail;
                $_SESSION['dpincode']=$driver_mail;
                $_SESSION['sl']=$sl;
                $useremail=$_SESSION['drivermail'];
        
                header("location: abdriver.php?mail=".$useremail."");
        
            } 
            
        }
        }
    }
    else{
      echo'
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <div class="alert alert-danger" role="alert">
      Login Faliure!
    </div>';
    echo'<a href = "driver.php" type="button" class="btn btn-outline-success">Go Back</a>';
    echo'<hr>';
  }
    
   }
   
    
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</body>
</html>