<?php
  session_start();
  error_reporting(0);
  if(!(isset($_SESSION["login"]) && $_SESSION["login"] == "OK")) {
    header("Location: logout.php");
    exit;
}
?>