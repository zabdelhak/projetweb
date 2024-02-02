<?php
include("condb.php"); 
$drop_att=$_GET["drop_att"];
$drop_long=$_GET["drop_long"];
$pick_att=$_GET["pick_att"];
$pick_long=$_GET["pick_long"];
$username=$_GET["username"];
//$hello="location:http://dev.virtualearth.net/REST/v1/locationrecog/".$username;
$sql="SELECT count(*) as idtrajet from trajet";
$re=$conn->query($sql);
$nb=$re->fetch_assoc();
$nb=intval($nb["idtrajet"]+1);
// echo $nb;
$sql="INSERT INTO trajet (idtrajet,iduser,pick_att,pick_long,drop_att,drop_long) VALUES ('$nb', '$username', '$pick_att', '$pick_long', '$drop_att', '$drop_long')";
$re=$conn->query($sql);
$sql="SELECT idtrajet,pick_att,pick_long,drop_att,drop_long from trajet where idtrajet=$nb";
$re=$conn->query($sql);
$r=$re->fetch_assoc();
//var_dump($r); 
$re=array();
$re=$r;
print json_encode($re);

?>