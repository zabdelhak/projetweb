<?php
    $serveur="localhost";
    $login="root";
    $password="borhane250";
    $conn = new mysqli($serveur,$login,$password,"projetweb");
    if($conn->connect_errno){die("connect failed". conn->connect_error);}
?>