<?php
require_once("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
    <title>Customer Sign-up Form</title>
    <style>
html,body{
display:grid;
height:100%;
width:100%;
place-items:center;
background:-webkit-linear-gradient(left,#a445b2,#fa4299);
}
       h1 {
        background-color:lightgreen;
        font-size:28px;
        border-radius:10px;
}
      /* Style for form container */
      .form-container {
        border: 2px solid #ccc;
        background-color:lightblue;
        padding: 20px;
        width: 500px;
        margin: 0 auto;
        border-radius:15px;
      }

      /* Style for form labels */
      label {
        display: inline-block;
        margin-bottom: 10px;
      }

      /* Style for form input fields */
      input[type=text], input[type=email], input[type=password] {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 15px;
        box-sizing: border-box;
        margin-bottom: 20px;
      }

      /* Style for form submit button */
      #btn[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      /* Style for form submit button when hovered over */
      #btn[type=submit]:hover {
        background-color:blueviolet;
      }
    </style>
  </head>
  <body>
<div class="width-100 top-header">
  <div class="container">
    <div class="width-100">
         <h1 class="news-list"><b><center>Royal Rasoi Restaurant</center></b></h1>
      <marquee class="headquote">
      <b>Welcome to Royal Rasoi Restaurant Feel The Difference With Us.</b>
      </marquee>
</div>
  </div>
</div>
    <div class="form-container">
      <form method="POST">
        <H2>Customer Profile Create</H2>
        <label>Full Name:</label>
        <input type="text" id="name" name="user" required placeholder="Enter your full Name">
        <br>
       <label>Email:</label>
        <input type="text" id="name" name="email" required placeholder="Enter your Email">
        <br>
        <label>Password:<sup>*</sup></label>
        <input type="password" id="pass" name="password" required placeholder=" Enter password">
        <br>
            <label>Confirm password:<sup>*</sup></label>
        <input type="password" id="pass" name="cpassword" required placeholder="Enter Confirm password">
        <input type="submit" id="btn" value="Sign up" name="subm"/>
         <div class="login-box">
         <p class="text">have an account?<a href="pro2.html">Log in</a></p>
          </form>
    </div>
    <?php
    
     
        $username=$_POST['user'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $conpass=$_POST['cpassword'];
        $tech=$_POST['technology'];
        $rate=$_POST['rating'];
        // $query ="INSERT INTO web2(username,email,password,conpass) VALUES ('$username','$email','$password','$conpass')";
        // $run=mysqli_query($con,$query);
    
if ($password !== $conpass) {
  die("Error: Password and confirm password do not match.");
}
$sql = "INSERT INTO students (fullname, email, password, technology, rating) VALUES ('$username', '$email', '$password', '$tech', '$rate')";

if (mysqli_query($conn, $sql)) {
    echo "Signup successful!";
}
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    // header('Location: index.html');
    ?>
  </body>
</html>