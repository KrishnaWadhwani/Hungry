<?php
error_reporting(0);
include "db_connect.php";
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $useremail = $_POST['useremail'];
    $cart = "SELECT * FROM logindb WHERE useremail='$useremail'";
    $cart_res = $conn->query($cart);
     
    $resc = "";
    if ($cart_res->num_rows > 0) {
    // output data of each row
      while($roww = $cart_res->fetch_assoc()) {
          $address=$roww['address'];
          $cno=$roww['cno'];
          $pincode=$roww['pincode'];
          $income=$roww['income'];
    }
    
   }
    if (!empty($username) || !empty($password) || !empty($useremail) || !empty($pincode) || !empty($cno)) {
        
    $sql = "Select * from logindb where username='$username' AND password='$password' AND useremail='$useremail' AND cno = '$cno' AND pincode = '$pincode'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    
    if ($num){
        $login = true;
        session_start();
        session_regenerate_id();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] =  $username;
        $_SESSION['useremail'] = $useremail;
        $_SESSION['pincode'] = $pincode;
        $_SESSION['address'] = $address;
        $_SESSION['cno'] = $cno;
        $_SESSION['income'] = $income;
        header("location: homepage.php");

    } 
     else{
        echo'
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <div class="alert alert-danger" role="alert">
        Login Faliure!
      </div>';
      echo'<a href = "login.html" type="button" class="btn btn-outline-success">Go Back</a>';
      echo'<hr>';
    }
}
}
    
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</body>
</html>