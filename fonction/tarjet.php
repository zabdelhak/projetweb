<?php
$drop=$_GET["drop"];
$pick=$_GET["pick"];
$user=(int)"1";
echo($drop);
echo($pick);
echo($user);
include("condb.php");
$sql="INSERT INTO trajet values(1,1,'4','$drop','$pick','iiii','iiiiii')";
$insert=$conn->query($sql);
?>