<?php
include "db_connect.php";
$sql = "SELECT * FROM `location`";
// Check connection
$result = $conn->query($sql);

$res = "";
if ($result->num_rows > 0) {
// output data of each row
  while($row = $result->fetch_assoc()) {
     echo'<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=75.08605957031251%2C27.510707451811598%2C78.13476562500001%2C28.887969348303454&amp;layer=mapnik&amp;marker='.$row['lat'].'%2C'.$row['long'].'" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat='.$row['lat'].'&amp;mlon='.$row['long'].'#map=9/'.$row['lat'].'/'.$row['long'].'">View Larger Map</a></small>';
  }
 }

?>
