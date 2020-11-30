<?php
include "required.php";
include "db_connect.php";
$mail=$_SESSION['useremail'];
error_reporting(0);
?>
<?php
$sql = "SELECT * FROM notifications WHERE mail = '$mail' ORDER BY id DESC";
// Check connection
$result = $conn->query($sql);

$res = "";
if ($result->num_rows > 0) {
// output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<div style="max-height: 230px;" data-simplebar>
<!-- item-->
<a href="view.php?piid='.$row['piid'].'" class="dropdown-item notify-item">
    <div class="notify-icon bg-primary">
        
    </div>
    <p class="notify-details">PIID '.$row['piid'].' SOLD 
        <small class="text-muted">'.$row['driver'].'</small>
        <small class="text-muted">Is Arriving For Pickup Ask Him For His Mail</small>
    </p>
</a>';


  }}
?>