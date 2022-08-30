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
    <title>Register</title>
</head>
<body>
<form class="signup" method="POST">
    <img src="./img/logo.png" alt="" class="logo-img">
        
        

        <div class="signup__field">
          <input
            
            class="signup__input"
            type="text"
            name="firstname"
            id="firstname"
            required
          />
          <label class="signup__label" for="firstname">
            First Name
          </label>
        </div>
        <div class="signup__field">
          <input
            
            class="signup__input"
            type="text"
            name="lastname"
            id="lastname"
            required
          />
          <label class="signup__label" for="lastname">
            Last Name
          </label>
        </div>

        <div class="signup__field">
          <input
            onChange={handleChange}
            class="signup__input"
            type="text"
            name="email"
            id="email"
            required
          />
          <label class="signup__label" for="email">
            Email
          </label>
        </div>

        <div class="signup__field">
          <input
            onChange={handleChange}
            class="signup__input"
            type="password"
            name="password"
            id="password"
            required
          />
          <label class="signup__label" for="password">
            Passwword
          </label>
        </div>
        <div class="signup__field">
          <input
            onChange={handleChange}
            class="signup__input"
            type="password"
            name="confirmpassword"
            id="confirmpassword"
            required
          />
          <label class="signup__label" for="password">
            Confirm Passwword
          </label>
        </div>

        <div class="inner-form">
            <h4>or</h4>
            <h3> Login with Google</h3>
           
            <p>By signing up, you agree to our terms,  Privacy
                Policy  and Cookies Policy</p>
        </div>

        <button name="submit">Sign up</button>
      </form>

      <div class="signup" id="signup-bar">
        <h4>Have an account?</h4>
        <a href="index.php">Login</a>
      </div>
    
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];

    if($firstname && $lastname && $email && $password &&$confirmpassword){
        if($password==$confirmpassword){
            $sql =$sql = "INSERT INTO users (firstname, lastname, email,password,confirmpassword) 
            VALUES ('$firstname', '$lastname', '$email','$password','$confirmpassword')";
    
            $res =mysqli_query($conn,$sql);
            if($res==true){
                $_SESSION['accountCreated']='<h1>Accout .".$email."</h1>';
                header('location:index.php');
                exit();
            }
           
        } else{
            echo'<h4 style="width:94%
            ;color:white
            ;position:absolute;
            top:0;left:0;
             background-color:red;
             margin:20px;
             padding:20px;
             
             display:flex;align-items:center;justify-content:center;">
            <span>Password does not match</span></h4>';
            // echo '<script>alert("Incorrect password")</script>';
        }

    }
    
    
    
    
    
   
}



?>