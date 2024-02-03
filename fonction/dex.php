<?php
include("session.php");
  if((isset($_SESSION["username"]))){
    header('Location:login.php');
    session_destroy();
    }
?>