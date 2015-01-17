<html>
<?php
  function runMyFunction() {
    $output = shell_exec('raspistill -n -o /var/www/photos/php_photo.jpg');
    echo $output;
    echo "Photo has been taken!";
    echo "<br>";
    echo '<img src="photos/php_photo.jpg" height="200" width="260">';
  }

  if (isset($_GET['test'])) {
    runMyFunction();
  }
?>

<br>Click the link, raspberry pi will take a photo after 5 second! <br>
<br> =========================== 
<br>
<a href='index.php?test=true'>Take a photo</a>
</html>
