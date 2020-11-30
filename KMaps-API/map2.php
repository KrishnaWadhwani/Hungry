<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script>
setInterval(runfunction, 10000);
function runfunction()
{

    $.post("map3.php",
        function(data, status)
        {
            document.getElementsByName('anyClass')[0].innerHTML=data;
        }
        
        
        )
}
runfunction();

</script>
  <div name="anyClass">
  
  </div>


  
</body>
</html>