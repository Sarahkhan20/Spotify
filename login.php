<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<style>
    
    img{
        position: absolute;
        z-index: 100;
        width: 60%;
        height: 100%;
    }
   
</style>
<body>
 <img src="images/music.avif" alt="" srcset="">   
     <div class="form-container">
        <div class="form">
        <form action="loginverification.php" method="post">
            <div class="disappear">
            <label>What should we call you?</label>
            <input type="text" placeholder="Enter a profile name" name="name" class="placeholder" size="55" style="margin: 8px 0 18px 0;">
            
            <label>Email address</label>
            <input type="email" name="email" placeholder="Enter your email address" class="placeholder" size="55" style="margin: 8px 0 20px 0;">
            
            <label>Create password</label>
            <input type="password" name="password"placeholder="Create a password" class="placeholder" size="55" style="margin: 8px 0 30px 0;">
             <input type="submit" class="btn btn-primary" />
        </form>
    
            <span class="login">Don't Have an Account
                <a href="index.php">Sign in.</a>

        </div>
    </div>
</body>
</html>