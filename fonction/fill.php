<?php 
session_start();
include("session.php");
include("condb.php");
$name=mysqli_real_escape_string( $conn,htmlspecialchars($_POST['user_name']));
$fname=mysqli_real_escape_string( $conn,htmlspecialchars($_POST['user_fname']));
$email=mysqli_real_escape_string( $conn,htmlspecialchars($_POST['user_email']));
$mat=mysqli_real_escape_string( $conn,htmlspecialchars($_POST['matricule']));
$pas=mysqli_real_escape_string( $conn,htmlspecialchars($_POST['mdp']));
$cel=mysqli_real_escape_string( $conn,htmlspecialchars($_POST['cel_number']));
$data="SELECT count(*) as nb_id from user";
$re=$conn->query($data);
$nb=$re->fetch_array();
$nb=intval($nb["nb_id"]+1);
$insert="INSERT INTO user VALUES('$nb','$email','$pas', '$cel', '$name', '$fname', '$mat',sysdate())";
echo($insert);
$re=$conn->query($insert);
$affected = $conn-> affected_rows;
// echo $affected;
if($affected==1)
 {

     header("location:../chauffeur/login.php");
 }
?>
