<?php
$name= $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
//Database connection here
$con =  new mysqli("localhost","root","","spotify_users");
if($con->connect_error){
    die("Failed to connect...:".$con->connect_error);
}else{
    $stmt = $con->prepare("SELECT * FROM login WHERE email=?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0){
$data = $stmt_result->fetch_assoc();
if($data['password_hash']  === $password && $data['name'] === $name){
   
    echo "<script> alert(' Login Success ');window.location.href='login.php';</script>";
    }
      else{
          echo "<script> alert('Account not found');window.location.href='login.php';</script>";

    }

 } else{
       echo "<script> alert('Invalid email or password');window.location.href='login.php';</script>";
    }
}

?>