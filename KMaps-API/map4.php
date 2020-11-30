<!DOCTYPE html>
<html>
    <head>
        <title>DLL</title>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
        <style type='text/css'>body{margin:0;padding:0;overflow:hidden;font-family:'Segoe UI',Helvetica,Arial,Sans-Serif}</style>
    </head>
    <body>
    <?php
    include "db_connect.php";
    $drivermail = $_GET['mail'];
     $sql = "SELECT * FROM `driver` WHERE drivermail = '$drivermail'";
     // Check connection
     $result = $conn->query($sql);
     
     $res = "";
     if ($result->num_rows > 0) {
     // output data of each row
       while($row = $result->fetch_assoc()) {
           $lat=$row['lat'];
           $long=$row['long'];
           
           
       }
    }
    
    ?>
    <form method = "POST" hidden>
    <button id = "myButtonId" type= "submit" ></button>
    </form>
        <div id='printoutPanel'></div>
        
        <div id='myMap' style='width: 100vw; height: 100vh;'></div>

        <script type='text/javascript'>
            var lat = "<?php echo $lat;?>";
            var long = "<?php echo $long;?>";
            function loadMapScenario() {
                var map = new Microsoft.Maps.Map(document.getElementById('myMap'), {});
                Microsoft.Maps.loadModule('Microsoft.Maps.Search', function () {
                    var searchManager = new Microsoft.Maps.Search.SearchManager(map);
                    var reverseGeocodeRequestOptions = {
                        location: new Microsoft.Maps.Location(lat, long),
                        callback: function (answer, userData) {
                            map.setView({ bounds: answer.bestView });
                            map.entities.push(new Microsoft.Maps.Pushpin(reverseGeocodeRequestOptions.location));
                            document.getElementById('printoutPanel').innerHTML =
                                answer.address.formattedAddress;
                        }
                    };
                    searchManager.reverseGeocode(reverseGeocodeRequestOptions);
                });
                
            }


            setInterval(function () {document.getElementById("myButtonId").click();}, 10000);
        </script>
        <script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?key=Anw4tkSSPY5XdAX7EParhcmnJdtjUQ6He_l4N1v82N8Trp8oX5P7shoEF53-LYsp&callback=loadMapScenario' async defer></script>
    </body>
</html>