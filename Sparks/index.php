<?php
include('connect.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Sparks </title>
</head>
<body>
<form class="signup" action="" method="POST">
  
<img src="./img/logo.png" alt="" class="logo-img">

<?php
 

if(isset($_SESSION['noAdmin'])){
  echo $_SESSION['noAdmin'];
  unset($_SESSION['noAdmin']) ;
}
?>

  <div class="signup__field">
    <input class="signup__input" type="email" name="email" id="email" required />
    <label class="signup__label" for="email">Email</label>
  </div>

  <div class="signup__field">
    <input class="signup__input" type="password" name="password" id="password" required />
    <label class="signup__label" for="password">Password</label>
  </div>

  <div class="inner-form">
            <h4>or</h4>
            <h3> Login with Google</h3>
           
           
        </div>

  
  

  <button name="submit">Login</button>
</form>
<div class="signup" id="signup-bar">
        <h4>Don't have an account?</h4>
        <a href="registerUser.php">Signup</a>
      </div>
  
</body>
</html>

<?php

if(isset($_POST['submit'])){
 $email=$_POST['email'];
 $password=$_POST['password'];

 $sql="SELECT * FROM users WHERE email = '$email' AND password='$password'";
 $result=mysqli_query($conn,$sql);
 $count=mysqli_num_rows($result);
 $row=mysqli_fetch_assoc($result);

 if($count==1){
  $_SESSION['LoginMessage']='<span class="success">Welcome . $username </span>';
  header('location:dashboard.php');
 }
}

?>