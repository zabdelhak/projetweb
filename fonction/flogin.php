<?php
session_start();
  if(isset($_POST["email"]) && isset($_POST["mdp"]))
 {   include("condb.php");
      $email=mysqli_real_escape_string( $conn,htmlspecialchars($_POST['email']));
     $mdp=mysqli_real_escape_string( $conn,htmlspecialchars($_POST['mdp']));
     if($email!=="" && $mdp!=="")
     {
      echo("hello");
      $date="UPDATE user set last_cnx=sysdate() WHERE (email='$email'and mdp='$mdp')";
      $re=$conn->query($date);
      $row="SELECT iduser,user_name,user_fname,cel_number from user where (email='$email' and mdp='$mdp')";
      $re=$conn->query($row);
      $rows=mysqli_fetch_array($re);
     if($rows!=0)
     {
      $_SESSION["username"]=$rows['iduser'];
      //echo $_SESSION["username"];
      header("location: http://127.0.0.1:81/projetweb/chauffeur/pagep.php");
     }
     else
     {
      
      header("location: http://127.0.0.1:81/projetweb/chauffeur/login.php?er=1");
     }
   }
   else
   {  
      header("location: http://127.0.0.1:81/projetweb/chauffeur/login.php?ep=1");
   }
}
?>