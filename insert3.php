<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Hungry Signup</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Hungry</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="signup.php">Signup</a>
        </li>

    </div>
  </div>
</nav>



    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <?php
    error_reporting(0);
    $drivename = $_POST['drivename'];
    $password = $_POST['password'];
    $drivermail = $_POST['drivermail'];
    $drivercno = $_POST['drivercno'];
    $driveraddr = $_POST['driveraddr'];
    $pincode = $_POST['pincode'];
    $drivertpg = $_POST['drivertpg'];
    $lat = '0';
    $long = '0';
    $upat =  '0';

if (!empty($drivename) || !empty($password) || !empty($driveraddr) || !empty($drivermail) || !empty($pincode)  || !empty($drivercno) || !empty($drivertpg)) {

    include 'db_connect.php'; 
    if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }

  else{
     $SELECT = "SELECT drivermail From driver Where drivermail = ? Limit 1";
     $INSERT = "INSERT INTO `driver`(`drivename`, `drivermail`, `drivercno`, `driveraddr`, `drivertpg`, `lat`, `long`, `upat`, `pincode`, `password`) VALUES ('$drivename','$drivermail','$drivercno','$driveraddr','$drivertpg','$lat','$long','$upat','$pincode','$password')";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $drivermail);
     $stmt->execute();
     $stmt->bind_result($drivermail);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0){
      $to = $drivermail;
      $subject = "Signup In Hunger";
      $message = "Hello Mr/Mrs $drivename Thank You For Making Account In Hungry
      Below Are The Information Of Account:
      Username: $drivename
      Registerd E-Mail: $drivermail
      Registerd Pincode: $pincode
      Contact No. Registerd: $drivercno
      Account Password: $password
      Thank You For Using Hungry
      MR/MRS $drivename
      ";
      $headers = "From: kwswhwmw@gmail.com";
      mail($to, $subject, $message, $headers);
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssssssss",$drivename, $drivermail, $drivercno, $pincode, $driveraddr, $drivertpg, $lat, $long, $upat, $password);
      $stmt->execute();
      echo '<div class="alert alert-primary" role="alert">
     Signup Successfull! Thank You For Your Warm Support.
    </div>';
      //echo'<img src = "Cartoon.png" class = "image" >';
      echo '<a href = "driver.php"><button class="btn btn-outline-success my-2 my-sm-0">Go To Login</button></a>';
      echo '<hr>';
      }else {
        echo '<div class="alert alert-warning" role="alert">
        Someone Alredy Registerd Using This E-Mail ! Sorry For The Inconvinience.
      </div>';
        echo '<div class="alert alert-success" role="alert">
        If This Is Your E-Mail Just Go & Login There 
      </div>';
             echo '<a href = "dsign.php"><button class="btn btn-outline-success my-2 my-sm-0">Go Back To Signup</button></a>';
        echo '<a href = "driver.php"><button class="btn btn-outline-success my-2 my-sm-0">Go To Login </button></a>';
        echo '<hr>';
     }
     $stmt->close();
     $conn->close();
    
    }}else{
    echo '<div class="alert alert-danger" role="alert">
    Please Fill All The Feilds Of Form!
    </div>';
     echo '<a href = "driver.php"><button class="btn btn-outline-success my-2 my-sm-0">Go Back </button></a>
     <hr>
     
    ';
 die();
}
?>
  </body>
</html>