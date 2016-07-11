
# TIP: Use the $_SERVER Sugerglobal to get all the data your need from the Client's HTTP Request.

# TIP: HTTP headers are printed natively in PHP by invoking header().
#      Ex. header('Content-Type', 'text/html');

# my approach

<!DOCTYPE html>
<html>
<body>

<?php  
 ob_start();  //begin buffering the output  
?> 
Welcome to my website!
<?php 
  if(true){ 
   echo "You're in!"; 
  } 
  else{ 
header('Content-Type', 'text/html');
  } 
require __DIR__ . '/../vendor/autoload.php’; 
foreach($_SERVER as $name=>$value) {
    echo “<li>$name = $value</li>\n”;
}
  ob_flush(); //output the data in the buffer 
?>

</body>
</html>
