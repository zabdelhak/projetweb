<?php
$drop_att=$_GET["drop_att"];
$drop_long=$_GET["drop_long"];
$pick_att=$_GET["pick_att"];
$pick_long=$_GET["pick_long"];
$hello="location:http://dev.virtualearth.net/REST/v1/locationrecog/".$drop_att.",".$drop_long;
echo $hello;
//header("location:http://dev.virtualearth.net/REST/v1/locationrecog/36.723714274679814,2.998576911884161?key=AnBg1zAkil1YotryDJPI3f73rIsfIBtk6YMFrPIIzMmW-OVo54wmpaljHrJlZV4l&output=json")
?>