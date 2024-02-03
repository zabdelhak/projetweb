<?php
session_start();
include("session.php");
include("condb.php");
$idtrajet=mysqli_real_escape_string( $conn,htmlspecialchars($_GET["idtrajet"]));
$date=mysqli_real_escape_string( $conn,htmlspecialchars($_GET["date"]));
$place=mysqli_real_escape_string( $conn,htmlspecialchars($_GET["place"]));
//echo($date);
$sql="UPDATE trajet SET date_depart='$date',nbplace='$place',nbplacer='0' WHERE (idtrajet = '$idtrajet')";
//echo($sql);
$re=$conn->query($sql);
$sql="SELECT idtrajet,pick_att,pick_long,drop_att,drop_long,iduser from trajet where idtrajet=$idtrajet";
//echo $sql;
$re=$conn->query($sql);
$r=$re->fetch_assoc();
//var_dump($r); 
$re=array();
$re=$r;
print json_encode($re);
?>
