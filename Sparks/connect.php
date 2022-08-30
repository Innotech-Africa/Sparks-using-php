


<?php
 session_start();
 
 $hostName = "localhost";
 $userName = "root";
 $password = "";
 $dbName = "sparkslogin";
 $conn= new mysqli($hostName,$userName,$password,$dbName);
 if(!$conn){
    die (mysqli_error($conn));
 }

  ?>