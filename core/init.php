<?php
  $db = mysqli_connect('localhost','root','Jn021087','tutorial');
  if (mysqli_connect_errno()) {
    echo "Database connetion failed with following error(s): " . mysqli_connect_error();
    die();
  }
?>
