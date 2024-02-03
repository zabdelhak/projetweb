<?php
include("condb.php");


$name = mysqli_real_escape_string($conn, htmlspecialchars($_POST['user_name']));
$fname = mysqli_real_escape_string($conn, htmlspecialchars($_POST['user_fname']));
$email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['user_email']));
$mat = mysqli_real_escape_string($conn, htmlspecialchars($_POST['matricule']));
$pas = mysqli_real_escape_string($conn, htmlspecialchars($_POST['mdp']));
$cel = mysqli_real_escape_string($conn, htmlspecialchars($_POST['cel_number']));


$hashed_password = password_hash($pas, PASSWORD_DEFAULT);


$data = "SELECT count(*) as nb_id FROM user";
$re = $conn->query($data);
$nb = $re->fetch_array();
$nb = intval($nb["nb_id"] + 1);


$insert = "INSERT INTO user VALUES (?, ?, ?, ?, ?, ?, ?, sysdate())";
$stmt = $conn->prepare($insert);
$stmt->bind_param("issssss", $nb, $email, $hashed_password, $cel, $name, $fname, $mat);
$stmt->execute();

$affected = $stmt->affected_rows;


if ($affected == 1) {
    header("location:../chauffeur/login.php");
}

$stmt->close();
$conn->close();
