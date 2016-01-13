<?php
  $db = mysqli_connect('localhost','root','Jn021087','tutorial');
  if (mysqli_connect_errno()) {
    echo "Database connetion failed with following error(s): " . mysqli_connect_error();
    die();
  }
  require_once $_SERVER['DOCUMENT_ROOT'] . "/config.php";
  require_once $_SERVER['DOCUMENT_ROOT'] . "/helpers/helpers.php";
?>
