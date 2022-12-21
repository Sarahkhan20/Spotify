<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password_1 = $_POST['password'];
    //Database connection
    $password = $password_1;
    $conn = new mysqli('localhost','root','','spotify_users');
    if($conn->connect_error){
        die('Connection Failed: ' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into login (name,email,password_hash) values(?,?,?)");
        $stmt->bind_param("sss",$name,$email,$password);
        $stmt->execute();
          echo "<script> alert('Registered Successfully..');window.location.href='index.php';</script>"; ;
        $stmt->close();
        $conn->close();
    }
?>                 